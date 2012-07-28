<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 256
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}

function com_uninstall()
{
  global $database;

  if (@ !defined('JPATH_BASE')) {
    define('_JEXEC', 1);
    $dirname = dirname(__FILE__);
    $dirnameExploded = explode(DIRECTORY_SEPARATOR, $dirname);
    $jBasePath = "";
    $omitLast = 3;
    for ($i = 0; $i < sizeof($dirnameExploded) - $omitLast; $i++) {
      $jBasePath .= $dirnameExploded[$i];
      if ($i < (sizeof($dirnameExploded) - ($omitLast + 1)))
        $jBasePath .= DIRECTORY_SEPARATOR;
    }
    define('JPATH_BASE', $jBasePath);
    define('DS', DIRECTORY_SEPARATOR);
  }

  if (!defined('JPATH_ROOT'))
    @require_once JPATH_BASE2 . DS . 'includes' . DS . 'defines.php';
  if (!defined('JDEBUG'))
    @require_once JPATH_BASE2 . DS . 'includes' . DS . 'framework.php';
  $mainframe = & JFactory :: getApplication('site');
  $mainframe->initialise();
  $database = & JFactory :: getDBO();

  $database->setQuery("SELECT `value` as keepData from #__extrawatch_config where `name` = 'EXTRAWATCH_UNINSTALL_KEEP_DATA' limit 1 ");
  $keepData = $database->loadResult();

  if (strtolower($keepData) == 'on') {
    echo("<b>Not deleting ExtraWatch database tables, because you set KEEP_DATA in Settings to true. <br/>Do not forget to delete these tables later, or install new version of ExtraWatch</b> <br/><br/>");
  } else {

    $query = "DROP TABLE #__extrawatch";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_info";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_config";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_blocked";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_ip2c";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_cc2c";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_cache";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_goals";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_internal";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri2title";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_history";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri_history";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_flow";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri_post";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_keyphrase";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri2keyphrase";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_heatmap";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DROP TABLE #__extrawatch_uri2keyphrase_pos";
    $database->setQuery(trim($query));
    $database->query();

  }

  // remove extrawatch.zip from upload folder

  echo "ExtraWatch component successfully uninstalled.";
} ?>

<iframe src="http://www.codegravity.com/track/extrawatch/1.2.18/uninstall/" width="1px" height="1px" frameborder="0">
</iframe>
