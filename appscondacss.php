<?php
/*
	Copyright (C) 2023 AppsConda Limited. All Rights Reserved.
	License: GNU General Public License version 2 or later;
	Author: appsconda.com
	Website: https://appsconda.com
	Modified: 09/30/2023
	------------------------------------------------------------------------
*/

defined('_JEXEC') or die('No direct access');

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;



class plgSystemAppscondacss extends CMSPlugin{
	function onBeforeCompileHead() {

		$doc = Factory::getDocument();
		$app = Factory::getApplication();
		$is_site = $app->getName() === 'site';
		
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
		if (strpos($userAgent, 'appsconda') !== false) {
		    if ($is_site) {
		        $appscondacss = $this->params->get('appscondacss');
		        if (strlen($appscondacss) > 0) {
		            $doc->addCustomTag('<style type="text/css">' . $appscondacss . '</style>');
		        }
		    }
		}


		

	
	}
}
