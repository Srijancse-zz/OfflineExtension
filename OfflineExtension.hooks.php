<?php
class OfflineExtensionHooks
{
  public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {

    $out->addModules( array( 'ext.OfflineExtension' ) )
    
  }
}
Raw
