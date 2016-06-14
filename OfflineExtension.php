<?php
/*Entry point */
if (!defined('MEDIAWIKI')){
    die();
}
if(function_exists('wfLoadExtension')) {
    wfLoadExtension('OfflineExtension');

    wfWarn( "Deprecated entry point to OfflineExtension. Please use wfLoadExtension('OfflineExtension').");

}
else
{
    die("MediaWiki version 1.25+ is required to use the OfflineExtension extension");
}
?>
