<?php

if (!defined('MEDIAWIKI')){
    die();
}
if(function_exists('wfLoadExtension')) {
    wfLoadExtension('offlineextension');

    wfWarn( "Deprecated entry point to offlineextension. Please use wfLoadExtension('offlineextension').");

}
else
{
    die("MediaWiki version 1.25+ is required to use the offlineextension extension");
}
?>
