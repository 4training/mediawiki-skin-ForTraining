<?php
/**
 * SkinTemplate class for the ForTraining skin
 *
 * @ingroup Skins
 */
class SkinForTraining extends SkinTemplate {
	/** @var string */
	public $skinname = 'fortraining';

	/** @var string */
	public $stylename = 'ForTraining';

	/** @var string */
	public $template = 'ForTrainingTemplate';

	/**
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.content.externallinks',
			'skins.fortraining',
		] );
		$out->addModules( [
			'skins.fortraining.js',
			'skins.fortraining.mobile'
		] );

		// Basic IE support without flexbox
		$out->addStyle( $this->stylename . '/resources/IE9fixes.css', 'screen', 'IE' );
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out
	 */
	public function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
