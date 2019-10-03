<?php
/**
* Plugin Update Checker Library 4.7
* http://w-shadow.com/
*
* Copyright 2019 Janis Elsts
* Released under the MIT license. See license.txt for details.
*/

require dirname(__FILE__) . '/updater/v4p7/Factory.php';
require dirname(__FILE__) . '/updater/v4/Factory.php';
require dirname(__FILE__) . '/updater/v4p7/Autoloader.php';

new Puc_v4p7_Autoloader();

$pucGeneralClasses = array(
  'Theme_UpdateChecker'     => 'Puc_v4p7_Theme_UpdateChecker',
  'Vcs_ThemeUpdateChecker'  => 'Puc_v4p7_Vcs_ThemeUpdateChecker',
  'GitHubApi'               => 'Puc_v4p7_Vcs_GitHubApi',
);

//Register classes defined in this version with the factory.
foreach ( $pucGeneralClasses as $pucGeneralClass => $pucVersionedClass ) :
  Puc_v4_Factory::addVersion($pucGeneralClass, $pucVersionedClass, '4.7');
  Puc_v4p7_Factory::addVersion($pucGeneralClass, $pucVersionedClass, '4.7');
endforeach;
