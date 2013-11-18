<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1358
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

 if (defined("EW_STANDALONE")) {
	define("JPATH_BASE",realpath("extrawatch"));
	define("ENV",1);
	define("_JEXEC",1);
}

 
defined('_JEXEC') or die('Restricted access');

/** ensure this file is being included by a parent file */


defined('_JEXEC') or die('Restricted access');

if (!defined("JPATH_BASE2")) {
    define("JPATH_BASE2", JPATH_BASE);
}

if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}

require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "includes.php";

$env = ExtraWatchEnvFactory::getEnvironment();


function renderExtraWatchAgent()
{

    $output = "";

    $extraWatch = new ExtraWatchMain();

    require_once JPATH_BASE . DS . "components" . DS . "com_extrawatch" . DS . "lang" . DS . $extraWatch->config->getLanguage() . ".php";

    if (EXTRAWATCH_DEBUG) {
        $output .= ("<span style='color: #ff3333'>" . _EW_DESC_DEBUG . "</span><br/>");
    }

    $extraWatchHTML = new ExtraWatchHTML();
    $extraWatch->block->checkPostRequestForSpam(ExtraWatchHelper::requestGet());
    $extraWatch->block->checkPostRequestForSpam(ExtraWatchHelper::requestPost());
    try {
        $extraWatch->visit->insertVisit();
    } catch (ExtraWatchIPBlockedException $e) {
        die($this->config->getConfigValue('EXTRAWATCH_BLOCKING_MESSAGE'));
    }

    
    //$output .= $extraWatchHTML->renderHeatMapJS();



    /*
     * The following piece of code identifies the userAgent and inserts the backlink to extrawatch.com
     * I would really appreciate, that you would keep the this unchanged.
     * It took me some time to create and maintain this component and to share it with everyone.
     * This is the least you could kindly do. Thank you.
     *
     * CodeGravity.com
    */


    $output = ""; // reset output;

    
	$title = "";
	if (!_EW_CLOUD_MODE) {
        $title = "Heatmap, Real-time analytics, Conversion tracking and anti-spam for Joomla, Wordpress, Drupal, Magento and Prestashop";
	}
        $output .= "<a href='http://www.extrawatch.com' target='_blank' title='" . $title . "'>";
		//$output .= "<img src='".$extraWatch->config->getLiveSite(). $env->getEnvironmentSuffix(). DS . "components" . DS . "com_extrawatch" . DS . "img" .DS. "icons" . DS . "extrawatch-logo-16x16.png"."'/>";
		$output .= "</a>";
    

    $host = $extraWatch->config->getLiveSiteWithSuffix();

	$output .= $extraWatch->helper->renderHTMLCodeSnippet(_EW_PROJECT_ID);

    return $output;
}


if (!defined('ENV') | $env->getEnvironmentName() == "nocms") echo renderExtraWatchAgent();


