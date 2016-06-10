<?php


class SpecialHelloWorld extends SpecialPage {
	public function __construct() {
		parent::__construct( 'HelloWorld' );
	}


	public function execute( $sub ) {
		$out = $this->getOutput();
		$out->addModules( 'offline' );
  	$out->addModuleStyles('offline-theme-default');
		$out->addModuleStyles('offline-language-english');
		$out->addModuleStyles('offline-language-english-indicator');
		$out->setPageTitle( $this->msg( 'offlineextension-helloworld' ) );

		$out->addHelpLink( 'How to become a MediaWiki hacker' );

		$out->addWikiMsg( 'offlineextension-helloworld-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
