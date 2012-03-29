<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 56
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/

$env = @$_REQUEST['env'];

include_once("includes.php");

switch ($env) {
    case "ExtraWatchDrupalEnv":
        {
        define('DRUPAL_ROOT', dirname('../../../../../../../'));
        require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
        drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
        define('ENV', 1);
        break;
        }

    case "ExtraWatchJoomlaEnv":
        {
        $mainframe = initializeJoomla();
        break;
        }

    case "ExtraWatchWordpressEnv":
        {
        require_once(dirname(__FILE__) . '/../../../../../wp-load.php');
        if (!defined('ENV')) define('ENV', 1);
        break;
        }
    case "ExtraWatchNoCMSEnv":
        {
        define('ENV', 1);
        break;
        }

    default:
        {
        if (!defined('ENV')) {
            $mainframe = initializeJoomla();
        }
        break;
        }
}

$extraWatch = new ExtraWatch();
$extraWatch->block->checkPermissions();

require_once ("lang" . DS . $extraWatch->config->getLanguage() . ".php");

$dir = ExtraWatchHelper::requestPost('dir');
$group = ExtraWatchHelper::requestPost('mod');

if (!$extraWatch->sizes->isAllowed($dir)) {
    die(_JW_SIZEQUERY_BAD_REQUEST);
}
if (is_dir($dir)) {
    $sizeNow = $extraWatch->sizes->getDirectorySize($dir, $group, true, $extraWatch->date->jwDateToday());
    $sizePrev = $extraWatch->sizes->getDirectorySize($dir, $group, false, $extraWatch->sizes->findLatestCheckDayByComOrModGroup());

    if ($sizePrev == $sizeNow)
        $size = "<span style='color: gray;'>" . $extraWatch->sizes->sizeFormat($sizeNow) . "</span>";
    elseif ($sizeNow <= $sizePrev)
        $size = "<span style='color: green;'>" . $extraWatch->sizes->sizeFormat($sizeNow) . " (-" . round(($sizePrev - $sizeNow) / $sizeNow * 100) . "%)</span>";
    else
        $size = "<span style='color: red;'>" . $extraWatch->sizes->sizeFormat($sizeNow) . " (+" . round(($sizeNow - $sizePrev) / $sizeNow * 100) . "%)</span>";

    echo $size;
} else {
    die(_JW_SIZEQUERY_BAD_REQUEST);
}

?>
