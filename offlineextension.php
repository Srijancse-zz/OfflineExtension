<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'offlineextension' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['offlineextension'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['offlineextensionAlias'] = __DIR__ . '/offlineextension.i18n.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for offlineextension extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the offlineextension extension requires MediaWiki 1.25+' );
}
