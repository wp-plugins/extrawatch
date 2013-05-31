<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 733
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

define('_JEXEC', 1);
define('DS', DIRECTORY_SEPARATOR);
$jBasePath = realpath(dirname(__FILE__) . DS . ".." . DS . ".." . DS . "..". DS);
define('JPATH_BASE2', $jBasePath);

include_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "includes.php";

$extraWatch = new ExtraWatchMain();
$extraWatch->block->checkPermissions();

require_once JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS. "lang" . DS . $extraWatch->config->getLanguage() . ".php";

$uriId = ExtraWatchHelper::requestGet('uriId');
$ip = ExtraWatchHelper::requestGet('ip');

$uriIdVisitRow = $extraWatch->visit->getJoinedURIRowById($uriId);

$extraWatchVisitsHTML = new ExtraWatchVisitHTML($extraWatch);
$extraWatchHeatmapHTML = new ExtraWatchHeatmapHTML($extraWatch->database);

$output = "";

$output .= ("
        <a href='javascript:extrawatch_blockIpToggle(\"$ip\");extrawatch_sendVisitsReq();'><img src='" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/block.png' />" . _EW_VISIT_BLOCK_IP . "</a><br/>
        <a href='" . $extraWatch->config->renderLink("goals", "&action=insert&id=" . $uriId) . "' '" . _EW_VISIT_ADD_PAGE . "'><img src='" . $extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal.gif' />" . _EW_VISIT_ADD_PAGE . "</a>");



echo($output);


