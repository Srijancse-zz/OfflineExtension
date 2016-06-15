<?php
/*Entry point */
if (!defined('MEDIAWIKI')){
    die();
}
if(function_exists('wfLoadExtension')) {
    wfLoadExtension('OfflineExtension');

  $wgResourceModules['ext.offlineextension.foo'] = array(
	'position' => 'top',
	'scripts' => 'modules/ext.offlineextension.foo.js',
	'styles' => array( 'modules/ext.offlineextension.foo-indicator.css','modules/ext.offlineextension.foo-english.css','modules/ext.offlineextension.foo-theme.css' ),
	'messages' => array(
		'OfflineExtension-foo-label',
	),
	'dependencies' => array(
		'jquery.cookie',
		'jquery.tabIndex',
	),

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'OfflineExtension',
);

}
else
{
    die("MediaWiki version 1.25+ is required to use the OfflineExtension extension");
}
?>
