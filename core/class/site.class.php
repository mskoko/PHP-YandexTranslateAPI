<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   file                 :  site.class.php
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *   author               :  Muhamed Skoko - mskoko.me@gmail.com
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

class Site {

	public function SiteConfig() {
		$SiteConfig = Array(
			'site_name' => 'Translator',
			'site_link' => 'mskoko.me',

			
			
		);
		return $SiteConfig;
	}

	/**
	 * [footerLinks description]
	 * @return [type] [ Return link : Links -> Name]
	 */
	public function footerLinks() {
		$fLinks = Array(
			'terms'							=> 'Terms of use',
			'frequently_asked_questions'	=> 'Frequently Asked Questions',
			'privacy' 						=> 'Privacy'
		);
		return $fLinks;
	}

}