var argv          = require('minimist')(process.argv.slice(2));
var autoprefixer  = require('gulp-autoprefixer');
var browserSync   = require('browser-sync').create();
var changed       = require('gulp-changed');
var concat        = require('gulp-concat');
var flatten       = require('gulp-flatten');
var gulp          = require('gulp');
var gulpif        = require('gulp-if');
var imagemin      = require('gulp-imagemin');
var jshint        = require('gulp-jshint');
var lazypipe      = require('lazypipe');
var less          = require('gulp-less');
var merge         = require('merge-stream');
var cssNano       = require('gulp-cssnano');
var plumber       = require('gulp-plumber');
var rev           = require('gulp-rev');
var runSequence   = require('run-sequence');
var sass          = require('gulp-sass');
var sourcemaps    = require('gulp-sourcemaps');
var uglify        = require('gulp-uglify');
var loadplugins   = require('gulp-load-plugins')();
var OSHome        = require('os').homedir();
var bump          = require('gulp-bump');
var fs            = require('fs');
var semver        = require('semver');
var smushit       = require('gulp-smushit');

var manifest      = require('asset-builder')('./assets/manifest.json');
var path          = manifest.paths;
var config        = manifest.config || {};
var globs         = manifest.globs;
var project       = manifest.getProjectGlobs();

var enabled = {
  rev:            argv.production,
  maps:           !argv.production,
  failStyleTask:  argv.production,
  failJSHint:     argv.production,
  stripJSDebug:   argv.production
};

var revManifest = path.dist + 'assets.json';

var onError = function(err) {
  console.log(err.toString());
  this.emit('end');
};

var getPackageJSON = function() {
  return JSON.parse(fs.readFileSync('./package.json', 'utf8'));
};

var cssTasks = function(filename) {
  return lazypipe()
    .pipe(function() {
      return gulpif(!enabled.failStyleTask, plumber());
    })
    .pipe(function() {
      return gulpif(enabled.maps, sourcemaps.init());
    })
    .pipe(function() {
      return gulpif('*.less', less());
    })
    .pipe(function() {
      return gulpif('*.scss', sass({
        outputStyle: 'nested',
        precision: 10,
        includePaths: ['.'],
        errLogToConsole: !enabled.failStyleTask
      }));
    })
    .pipe(concat, filename)
    .pipe(autoprefixer, {
      browsers: [
        'last 2 versions',
        'android 4',
        'opera 12'
      ]
    })
    .pipe(cssNano, {
      safe: true
    })
    .pipe(function() {
      return gulpif(enabled.rev, rev());
    })
    .pipe(function() {
      return gulpif(enabled.maps, sourcemaps.write('.', {
        sourceRoot: 'assets/styles/'
      }));
    })();
};

var jsTasks = function(filename) {
  return lazypipe()
    .pipe(function() {
      return gulpif(enabled.maps, sourcemaps.init());
    })
    .pipe(concat, filename)
    .pipe(uglify, {
      compress: {
        'drop_debugger': enabled.stripJSDebug
      }
    })
    .pipe(function() {
      return gulpif(enabled.rev, rev());
    })
    .pipe(function() {
      return gulpif(enabled.maps, sourcemaps.write('.', {
        sourceRoot: 'assets/scripts/'
      }));
    })();
};

var writeToManifest = function(directory) {
  return lazypipe()
    .pipe(gulp.dest, path.dist + directory)
    .pipe(browserSync.stream, {match: '**/*.{js,css}'})
    .pipe(rev.manifest, revManifest, {
      base: path.dist,
      merge: true
    })
    .pipe(gulp.dest, path.dist)();
};

gulp.task('styles', function() {
  var merged = merge();
  manifest.forEachDependency('css', function(dep) {
    var cssTasksInstance = cssTasks(dep.name);
    if (!enabled.failStyleTask) {
      cssTasksInstance.on('error', function(err) {
        console.error(err.message);
        this.emit('end');
      });
    }
    merged.add(gulp.src(dep.globs, {base: 'styles'})
      .pipe(plumber({errorHandler: onError}))
      .pipe(cssTasksInstance));
  });
  return merged
    .pipe(writeToManifest('styles'));
});

gulp.task('scripts', ['jshint'], function() {
  var merged = merge();
  manifest.forEachDependency('js', function(dep) {
    merged.add(
      gulp.src(dep.globs, {base: 'scripts'})
        .pipe(plumber({errorHandler: onError}))
        .pipe(jsTasks(dep.name))
    );
  });
  return merged
    .pipe(writeToManifest('scripts'));
});

gulp.task('fonts', function() {
  return gulp.src(globs.fonts)
    .pipe(flatten())
    .pipe(gulp.dest(path.dist + 'fonts'))
    .pipe(browserSync.reload(({stream:true})));
});

gulp.task('images', function() {
  return gulp.src(globs.images)
    .pipe(imagemin([
      imagemin.jpegtran({
        progressive: true,
      }),
      imagemin.gifsicle({
        optimizationLevel: 3,
        interlaced: true
      }),
      imagemin.optipng({
        optimizationLevel: 7
      }),
      imagemin.svgo({plugins: [
        {removeUnknownsAndDefaults: true},
        {cleanupIDs: true},
        {cleanupAttrs: true},
        {inlineStyles: true},
        {removeComments: true},
        {removeMetadata: true},
        {removeTitle: true},
        {removeDesc: true},
        {removeUselessDefs: true},
        {removeEmptyAttrs: true},
        {removeEmptyContainers: true},
        {minifyStyles: true},
        {convertColors: true},
        {removeUselessStrokeAndFill: true}
      ]})
    ]))
    .pipe(gulp.dest(path.dist + 'images'))
    .pipe(browserSync.reload(({stream:true})));
});

gulp.task('jshint', function() {
  return gulp.src([
    'bower.json', 'gulpfile.js'
  ].concat(project.js))
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(gulpif(enabled.failJSHint, jshint.reporter('fail')));
});

gulp.task('clean', require('del').bind(null, [path.dist]));

gulp.task('watch', function() {
  browserSync.init({
    files: ['{lib,templates}/**/*.php', '*.php'],
    proxy: config.devUrl,
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**']
    }
  });
  gulp.watch([path.source + 'styles/**/*'], ['styles']);
  gulp.watch([path.source + 'scripts/**/*'], ['jshint', 'scripts']);
  gulp.watch([path.source + 'fonts/**/*'], ['fonts']);
  gulp.watch([path.source + 'images/**/*'], ['images']);
  gulp.watch(['bower.json', 'assets/manifest.json'], ['build']);
});

gulp.task('build', function(callback) {

  var tasks = [
    'styles',
    'scripts',
    ['fonts', 'images']
  ];

  if (argv.production) {
    tasks.push('version');
    tasks.push('zip');
  }

  runSequence.apply(
    this,
    tasks.concat([callback])
  );
});

gulp.task('default', ['clean'], function() {
  gulp.start('build');
});

gulp.task('zip', function(callback) {
  var pkg = getPackageJSON();
  var newversion = semver.inc(pkg.version, argv.production);
  return gulp.src([
    'dist/**/*',
    'acf-json/*',
    'templates/**/*',
    'woocommerce/**/*',
    'vendor/**/*',
    'lang/*',
    'lib/**/*',
    '*.css',
    '*.md',
    '*.php',
    '*.txt',
    '*.png',
  ], {
   base: '.'
  })
  .pipe(loadplugins.zip(pkg.name + '-' + newversion +'.zip'))
  .pipe(gulp.dest( OSHome + '/Documents/Themes/' + pkg.name));
});

gulp.task('version', function() {
  var pkg = getPackageJSON();
  var newversion = semver.inc(pkg.version, argv.production);
  var banner = ['/*',
    'Theme Name: ' + pkg.theme,
    'Theme URI: '+ pkg.homepage,
    'Version: '+ newversion,
    '',
    'Author: '+ pkg.author,
    'Author URI: '+ pkg.homepage,
    'Text Domain: imaga',
    '',
    'License: '+ pkg.licenses[0].type,
    'License URI: '+ pkg.licenses[0].url,
    '*/',
    ''].join('\n');

  gulp.src('./package.json')
    .pipe(bump({version: newversion}))
    .pipe(gulp.dest('./'));

  fs.writeFile('./style.css', banner, (err) => {
    if (err){
      console.error(err.message);
      this.emit('end');
    }
  });
});
