<?php

$wgResourceModules['ext.BoilerPlate'] = array(
	// JavaScript and CSS styles. To combine multiple files, just list them as an array.
	'scripts' => ( 'js/offline.min.js'),
	'styles' => array('css/offline-language-english-indicator.css , css/offline-language-english.css'),

	// When your module is loaded, these messages will be available through mw.msg().
	// E.g. in JavaScript you can access them with mw.message( 'myextension-hello-world' ).text()
	'messages' => array( 'myextension-hello-world', 'myextension-goodbye-world' ),

	// If your scripts need code from other modules, list their identifiers as dependencies
	// and ResourceLoader will make sure they're loaded before you.
	// You don't need to manually list 'mediawiki' or 'jquery', which are always loaded.
	'dependencies' => array( 'jquery.ui.datepicker' ),

	// You need to declare the base path of the file paths in 'scripts' and 'styles'
	'localBasePath' => __DIR__,
	// ... and the base from the browser as well. For extensions this is made easy,
	// you can use the 'remoteExtPath' property to declare it relative to where the wiki
	// has $wgExtensionAssetsPath configured:
	'remoteExtPath' => 'MyExtension'
);
