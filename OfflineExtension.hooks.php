<?php

class OfflineExtensionHooks
{

  public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {

    $out->addModules( array( 'ext.OfflineExtension' ) );
    $out->addModuleStyles( array('ext.offlineextension.foo-indicator','ext.offlineextension.foo-english','ext.offlineextension.foo-theme'));

  }


}
