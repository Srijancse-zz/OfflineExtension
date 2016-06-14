<?php


class Specialofflineextension extends SpecialPage {
	public function __construct() {
		parent::__construct( 'OfflineExtension' );
	}


	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->addModules( 'ext.offlineextension.foo' );
   	$out->addModuleStyles('ext.offlineextension.foo-indicator');
		$out->addModuleStyles('ext.offlineextension.foo-english');
		$out->addModuleStyles('ext.offlineextension.foo-theme');
		$out->setPageTitle( $this->msg( 'offlineextension-sayshelloworld' ) );

		$out->addHelpLink( 'How to become a MediaWiki hacker' );

		$out->addWikiMsg( 'offlineextension-helloworld-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
