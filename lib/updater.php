<?php
/**
* Plugin Update Checker Library 4.8
* http://w-shadow.com/
*
* Copyright 2019 Janis Elsts
* Released under the MIT license. See license.txt for details.
*/

require dirname(__FILE__) . '/updater/v4p8/Autoloader.php';
new Puc_v4p8_Autoloader();

require dirname(__FILE__) . '/updater/v4p8/Factory.php';
require dirname(__FILE__) . '/updater/v4/Factory.php';

//Register classes defined in this version with the factory.
foreach (
	array(
		'Theme_UpdateChecker'  => 'Puc_v4p8_Theme_UpdateChecker',
		'Vcs_ThemeUpdateChecker'  => 'Puc_v4p8_Vcs_ThemeUpdateChecker',
		'GitHubApi'    => 'Puc_v4p8_Vcs_GitHubApi',
	)
	as $pucGeneralClass => $pucVersionedClass
) {
	Puc_v4_Factory::addVersion($pucGeneralClass, $pucVersionedClass, '4.8');
	//Also add it to the minor-version factory in case the major-version factory
	//was already defined by another, older version of the update checker.
	Puc_v4p8_Factory::addVersion($pucGeneralClass, $pucVersionedClass, '4.8');
}
