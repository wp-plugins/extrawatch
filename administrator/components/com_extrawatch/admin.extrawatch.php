<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 41
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) die('Restricted access');

if (!defined('_JEXEC')) define('_JEXEC', 1);
if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);


//Fix by el_oskaros
$jPathBase2 = str_replace(DIRECTORY_SEPARATOR . 'administrator' . DIRECTORY_SEPARATOR . 'index.php', '', $_SERVER['SCRIPT_FILENAME']);
$jPathBase2 = str_replace(DIRECTORY_SEPARATOR . 'administrator' . DIRECTORY_SEPARATOR . 'index2.php', '', $jPathBase2);

/* replace all possible combinations */
$jPathBase2 = str_ireplace('/administrator/index.php', '', $jPathBase2);
$jPathBase2 = str_ireplace('\\administrator\\index.php', '', $jPathBase2);
$jPathBase2 = str_ireplace('/administrator/index2.php', '', $jPathBase2);
$jPathBase2 = str_ireplace('\\administrator\\index2.php', '', $jPathBase2);

if (@$GLOBALS['databases']) {
    $drupalModulePath = realpath('.') . DS . "sites" . DS . "all" . DS . "modules" . DS . "extrawatch";
    $jPathBase2 = $drupalModulePath;
}


if (!defined('JPATH_BASE2'))
    define('JPATH_BASE2', $jPathBase2);

/*    if (defined('JPATH_BASE') && !defined('JPATH_BASE2')) {
        define('JPATH_BASE2', JPATH_BASE);
    }*/

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "config.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "inc.extrawatch.env.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.ip2country.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.block.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.block.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.cache.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.config.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.goal.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.goal.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.helper.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.date.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.stat.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.stat.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.history.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.visit.history.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.trend.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.log.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "admin.extrawatch.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.sizes.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.flow.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.flow.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.heatmap.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.heatmap.html.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.seo.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "class.extrawatch.seo.html.php");

$env = ExtraWatchEnvFactory::getEnvironment();

switch (@get_class($env)) {

    case 'ExtraWatchWordpressEnv': {
    echo extraWatchMainController();
    break;
    }

    case 'ExtraWatchJoomlaEnv': {
    if (!defined('JPATH_ROOT'))
        require_once (JPATH_BASE2 . DS . 'includes' . DS . 'defines.php');

    if (!defined('JDEBUG'))
        @ require_once (JPATH_BASE2 . DS . 'includes' . DS . 'framework.php');

    if ("1.5" == "1.5" && !version_compare(JVERSION, '1.6.0', '<')) {
        $mainframe = & JFactory :: getApplication('site');
        $mainframe->initialise();
    }
    echo extraWatchMainController();
    break;
    }

}


function extraWatchMainController() {

    $extraWatch = new ExtraWatch();
    $extraWatchHTML = new ExtraWatchHTML();
    $extraWatchGoalHTML = new ExtraWatchGoalHTML($extraWatch);
    $extraWatchTrendHTML = new ExtraWatchTrendHTML($extraWatch);
    $env = ExtraWatchEnvFactory::getEnvironment();

    $action = @ ExtraWatchHelper::requestGet('action');
    $task = @ ExtraWatchHelper::requestGet('task');
    $option = @ ExtraWatchHelper::requestGet('option');
    $result = @ ExtraWatchHelper::requestGet('result');


    switch ($task) {

        /*
         * disabled trial
         *
         *     case "useTrial" :
                {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatch->config->useTrial();
                    $extraWatch->config->saveVersionIntoDatabase();
                    $extraWatch->config->setLiveSite($env->getRootSite());
                    break;
                }
        */
        case "useFreeVersion" :
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatch->config->useFreeVersion();
            $extraWatch->config->saveVersionIntoDatabase();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }


        case "activate" :
            {
            $extraWatchHTML->renderAdminStyles();
            $extraWatch->config->activate(ExtraWatchHelper::requestGet('key'));
            $extraWatch->config->saveVersionIntoDatabase();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }

        case "licenseAccepted" :
            {
            $extraWatch->config->setLiveSite($env->getRootSite());
            $extraWatch->config->setLicenseAccepted();
            $extraWatch->config->saveVersionIntoDatabase();
            break;
            }

        case "resetLiveSite" :
            {
            $extraWatch->block->checkPermissions();
            $extraWatch->config->setLiveSite($env->getRootSite());
            break;
            }
    }
    if (!$extraWatch->config->checkLicenseAccepted()) {
        $extraWatchHTML->renderAdminStyles();
        return $extraWatchHTML->renderAcceptLicense();
    } else
        if (!$extraWatch->config->isFree() && !$extraWatch->config->isAdFree()  /* disabled trial || ($extraWatch->config->isTrial() && !$extraWatch->config->isTrialTimeOver())*/) {
            $extraWatchHTML->renderAdminStyles();
            return $extraWatchHTML->renderAdFreeLicense();
        } else {
            switch ($task) {

                case "storeIpInfoDbKey":
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $keyValue = $_POST['storeIpInfoDbKey'];
                    if ($keyValue) {
                        $extraWatch->config->saveConfigValue("EXTRAWATCH_IPINFODB_KEY", $keyValue);
                    } else {
                        echo("<br/><div style='border: 1px solid red; width: 50%; padding: 10px;'>" . _JW_STATS_MAP_INVALID_KEY . "</div>");
                    }
                    $extraWatchHTML->renderBody($option);
                    break;
                    }

                case "update" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    return $extraWatchHTML->renderUpdate();
                    break;
                    }

                case "sizes" :
                    {
                    if (!$extraWatch->config->isFree()) {
                        $extraWatchHTML->renderAdminStyles();
                        $extraWatchHTML->renderHeader();
                        return $extraWatchHTML->renderSizes();
                    }

                    break;
                    }

                case "seo" :
                    {
                    switch ($action) {
                        case "save":
                            {
                            $result = $extraWatch->helper->saveSEOSettings($_POST);
                            }
                        default:
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchHTML->renderSEO();
                            break;
                            }
                    }
                    break;
                    }

                case "graphs" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    return $extraWatchTrendHTML->renderGraphsForGroup(ExtraWatchHelper::requestGet('group'));

                    break;
                    }

                case "trends" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    return $extraWatchTrendHTML->renderTrends();

                    break;
                    }

                case "credits" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    return $extraWatchHTML->renderCredits();

                    break;
                    }
                case "goals" :
                    {
                    switch ($action) {

                        case "insert":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchGoalHTML->renderBackToGoals();
                            $extraWatchGoalHTML->renderGoalsInsert(@ ExtraWatchHelper::requestGet('id'), @ ExtraWatchHelper::requestGet('postid'));
                            break;
                            }
                        case "save":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatch->goal->saveGoal($_POST);
                            $extraWatchGoalHTML->renderGoals(@$result);

                            break;
                            }
                        case "edit":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchGoalHTML->renderBackToGoals();
                            $extraWatchGoalHTML->renderGoalEdit(@ ExtraWatchHelper::requestGet('goalId'));

                            break;
                            }
                        case "delete":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $result = $extraWatch->goal->deleteGoal(@ ExtraWatchHelper::requestGet('goalId'));
                            $extraWatchGoalHTML->renderGoals(@ $result);

                            break;
                            }
                        case "enable":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $result = $extraWatch->goal->enableGoal(@ ExtraWatchHelper::requestGet('goalId'));
                            $extraWatchGoalHTML->renderGoals(@ $result);

                            break;
                            }
                        case "disable":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $result = $extraWatch->goal->disableGoal(@ ExtraWatchHelper::requestGet('goalId'));
                            $extraWatchGoalHTML->renderGoals(@ $result);

                            break;
                            }
                        default:
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchGoalHTML->renderGoals(@ $result);

                            break;
                            }

                    }

                    break;
                    }
                case "settings" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $extraWatchHTML->renderSettings(@ $result);

                    break;
                    }
                case "settingsSave" :
                    {
                    $result = $extraWatch->helper->saveSettings($_POST);
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $extraWatchHTML->renderSettings(@ $result);

                    break;
                    }
                case "resetData" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $result = $extraWatch->helper->resetData($_POST);
                    $extraWatchHTML->renderResetData($result);
                    break;
                    }

                case "antiSpam" :
                    {

                    switch ($action) {

                        case "toggleBlocking":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $ip = @ ExtraWatchHelper::requestGet('ip');
                            $extraWatch->block->blockIpToggle($ip);
                            $extraWatchHTML->renderAntiSpam();
                            break;

                            }

                        case "save" :
                            {
                            $result = $extraWatch->helper->saveAntiSpamSettings($_POST);
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchHTML->renderAntiSpam();
                            break;
                            }


                        default:
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchHTML->renderAntiSpam();
                            break;
                            }
                    }

                    break;
                    }


                case "status" :
                    {
                    if (!$extraWatch->config->isFree()) {
                        $extraWatchHTML->renderAdminStyles();
                        $extraWatchHTML->renderHeader();
                        $extraWatchHTML->renderStatus();
                    }
                    break;
                    }

                /*			case "upgrade" :
                {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $extraWatchHTML->renderUpgrade();
                    break;
                }*/


                case "license" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    return $extraWatchHTML->renderAdFreeLicense();
                    break;
                    }


                case "history" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    return $extraWatchHTML->renderVisitsHistory();
                    break;
                    }

                case "flow" :
                    {
                    if (!$extraWatch->config->isFree()) {
                        $extraWatchHTML->renderAdminStyles();
                        $extraWatchHTML->renderHeader();
                        $extraWatchHTML->renderFlow();
                    }
                    break;
                    }

                case "emails" :
                    {

                    switch ($action) {

                        case "save":
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $result = $extraWatch->helper->saveEmailSettings($_POST);
                            $extraWatchHTML->renderEmails();
                            break;

                            }
                        default:
                            {
                            $extraWatchHTML->renderAdminStyles();
                            $extraWatchHTML->renderHeader();
                            $extraWatchHTML->renderEmails();
                            break;
                            }
                    }
                    break;
                    }

                case "heatmap" :
                    {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $extraWatchHTML->renderHeatMap();
                    break;
                    }

                default :
                    if ($extraWatch->config->checkLicenseAccepted()) {
                        $extraWatchHTML->renderAdminStyles();
                        $extraWatchHTML->renderHeader();
                        $extraWatchHTML->renderBody($option);
                    } else {
                        $extraWatchHTML->renderAdminStyles();
                        return $extraWatchHTML->renderAcceptLicense();
                    }
                    break;
            }
            /*
                } else {
                    $extraWatchHTML->renderAdminStyles();
                    $extraWatchHTML->renderHeader();
                    $extraWatchHTML->renderTrialVersionInfo();
                }
            */
        }
}

?>
