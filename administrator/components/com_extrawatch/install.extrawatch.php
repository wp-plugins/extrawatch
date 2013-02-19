<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 511
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}

function extrawatch_fixFilePermissions() {
  $filesArray = array(
    "img.php",
    "timezone.php",
    "ajax" . DIRECTORY_SEPARATOR . "block.php",
    "ajax" . DIRECTORY_SEPARATOR . "last.php",
    "ajax" . DIRECTORY_SEPARATOR . "lastvisit.php",
    "ajax" . DIRECTORY_SEPARATOR . "sizequery.php",
    "ajax" . DIRECTORY_SEPARATOR . "sizequerytotal.php",
    "ajax" . DIRECTORY_SEPARATOR . "stats.php",
    "ajax" . DIRECTORY_SEPARATOR . "tooltip.php",
    "ajax" . DIRECTORY_SEPARATOR . "trendtooltip.php",
    "ajax" . DIRECTORY_SEPARATOR . "vars.php",
    "ajax" . DIRECTORY_SEPARATOR . "visits.php",
    "js" . DIRECTORY_SEPARATOR . "extrawatch.js.php",
    "js" . DIRECTORY_SEPARATOR . "maps.js.php");

  foreach($filesArray as $file) {
    @chmod(JPATH_SITE.DIRECTORY_SEPARATOR."components".DIRECTORY_SEPARATOR."com_extrawatch".DIRECTORY_SEPARATOR.$file, 0755);
  }
}


function extrawatch_sureRemoveDir($dir, $DeleteMe)
{
  if (!$dh = @opendir($dir)) return;
  while (FALSE !== ($obj = readdir($dh))) {
    if ($obj == '.' || $obj == '..') continue;
    if (!@unlink($dir . '/' . $obj)) extrawatch_sureRemoveDir($dir . '/' . $obj, TRUE);
  }
  if ($DeleteMe) {
    closedir($dh);
    @rmdir($dir);
  }
}

function extrawatch_initialize_ip2country($rootDir, $database)
{
  $i = 0;

  $numberOfFiles = 220;
  for ($j = 1; $j <= $numberOfFiles; $j++) {
    $fileName = $rootDir . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "com_extrawatch" . DIRECTORY_SEPARATOR . "sql" . DIRECTORY_SEPARATOR . "extrawatch-$j.sql";
    $lines = @file($fileName);
    if (!$lines) {
      //die("<span style='color: red'>Error reading file: $fileName, your joomla site path is set to: ".$rootDir." what is probably not correct, check configuration.php</span><br/>");
    }

    $query = "";
    foreach ($lines as $line_num => $line) {
      $query .= trim($line);
      if (strstr($line, ");")) {
        if ($j % 20 == 0) {
          //sprintf("%d%%",((floor((($j) / $numberOfFiles) * 100))));
        }
        elseif ($j % 2 == 0) {
          //echo (".");
        }
        $database->setQuery(trim($query));
        $result = @$database->query();
        //flush();
        $query = "";
        $i++;
      }
    }
  }
  try {
    // @sureRemoveDir(dirname($fileName), FALSE);
  } catch (Exception $e) {
    echo 'Cannot remove directory with SQL files: ', $e->getMessage(), "\n";
  }
}

function extrawatch_initialize_menu($database)
{

    $query = "DELETE FROM #__extrawatch_config where name like 'rand' ";
    $database->setQuery(trim($query));
    $database->query();

    $rand = rand();
    $query = "INSERT INTO #__extrawatch_config (id, name, value) values ('', 'rand', '$rand') ";
    $database->setQuery(trim($query));
    $database->query();

    if (version_compare(JVERSION, "2.5.0", "<")) {

        $query = "UPDATE #__components SET admin_menu_img='../components/com_extrawatch/img/icons/extrawatch-logo-16x16.png' WHERE admin_menu_link='option=com_extrawatch'";
        $database->setQuery(trim($query));
        $database->query();

        $query = "DELETE FROM #__components where admin_menu_link like '%option=com_extrawatch%'  and admin_menu_img like '%../components/com_extrawatch/icons/%' and admin_menu_img<>'../components/com_extrawatch/img/icons/extrawatch-logo-16x16.png'";
        $database->setQuery(trim($query));
        $database->query();

        $query = sprintf("select id from #__components where `name` = '%s' limit 1", "ExtraWatch");
        $database->setQuery(trim($query));
        $id = $database->loadResult();

        $query = sprintf("INSERT INTO #__components values ('', 'Live Stats', '', 0, %d, 'option=com_extrawatch', '', '', 0, '../components/com_extrawatch/img/icons/map_icon.gif', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("INSERT INTO #__components values ('', 'SEO', '', 0, %d, 'option=com_extrawatch&task=seo', '', '', 1, '../components/com_extrawatch/img/icons/seo.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("INSERT INTO #__components values ('', 'Heatmap', '', 0, %d, 'option=com_extrawatch&task=heatmap', '', '', 2, '../components/com_extrawatch/img/icons/heatmap.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Traffic Flow', '', 0, %d, 'option=com_extrawatch&task=flow', '', '', 3, '../components/com_extrawatch/img/icons/flow.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Graphs & Trends', '', 0, %d, 'option=com_extrawatch&task=graphs', '', '', 4, '../components/com_extrawatch/img/icons/trend_icon.gif', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Goals', '', 0, %d, 'option=com_extrawatch&task=goals', '', '', 5, '../components/com_extrawatch/img/icons/goal.gif', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Visit History', '', 0, %d, 'option=com_extrawatch&task=history', '', '', 6, '../components/com_extrawatch/img/icons/history.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Anti-spam & Blocking', '', 0, %d, 'option=com_extrawatch&task=antiSpam', '', '', 7, '../components/com_extrawatch/img/icons/antispam.gif', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Email Reports', '', 0, %d, 'option=com_extrawatch&task=emails', '', '', 8, '../components/com_extrawatch/img/icons/emails.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Your License', '', 0, %d, 'option=com_extrawatch&task=license', '', '', 9, '../components/com_extrawatch/img/icons/license.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Database Status', '', 0, %d, 'option=com_extrawatch&task=status', '', '', 10, '../components/com_extrawatch/img/icons/status.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Modules / Components Sizes', '', 0, %d, 'option=com_extrawatch&task=sizes', '', '', 11, '../components/com_extrawatch/img/icons/sizes.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Settings', '', 0, %d, 'option=com_extrawatch&task=settings', '', '', 12, '../components/com_extrawatch/img/icons/settings.gif', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Update', '', 0, %d, 'option=com_extrawatch&task=update', '', '', 13, '../components/com_extrawatch/img/icons/update.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();
        $query = sprintf("   INSERT INTO #__components values ('', 'Credits', '', 0, %d, 'option=com_extrawatch&task=credits', '', '', 14, '../components/com_extrawatch/img/icons/credits.png', 0, '', 1)", (int)$id);
        $database->setQuery($query);
        $database->query();

    }
}

function com_install()
{

  @ set_time_limit(0);

  $mainframe = & JFactory :: getApplication('site');
  $mainframe->initialise();
  $database = & JFactory :: getDBO();

  if ("1.6" == "1.5" && !version_compare(JVERSION, '1.6.0', '<')) {
    echo("<span style='color: red'><h2>Error: You are using joomla " . JVERSION . " but the installation package is for version 1.6 ! Uninstall this version, <a href='http://www.extrawatch.com/download'>Go to download section</a>, download the package for Joomla " . JVERSION . ", and install again.</h2></span>");
    return -1;
  } elseif ("1.6" == "1.6" && !version_compare(JVERSION, '1.6.0', '>=')) {
    echo("<span style='color: red'><h2>Error: You are using joomla " . JVERSION . " but the installation package is for version 1.6 ! Uninstall this version, <a href='http://www.extrawatch.com/download'>Go to download section</a>, download the package for Joomla " . JVERSION . ", and install again.</h2></span>");
    return -1;
  }

  ?>
<center>
  <table width="100%" border="0">
    <tr>
      <td></td>
      <td>
        <strong>ExtraWatch </strong><br/>
        <font class="small">&copy; Copyright 2006-2013 by Matej Koval - <a href='http://www.extrawatch.com'
                                                                             target='_blank'>www.extrawatch.com</a><br/>
          This component is copyrighted software. Distribution is prohibited.</font><br/>
      </td>
    </tr>
    <tr>
      <td colspan="2"><br/>
        <code>Installation Process :<br/>
          <?php
          extrawatch_initialize_menu($database);
          extrawatch_initialize_ip2country(JPATH_SITE, $database);
          try {
            extrawatch_fixFilePermissions();
          } catch (Exception $e) {
            echo("Could not fix file permissions: ".$e);
          }
          ?>
          <br/><br/>
          <font color="green"><b>Installation finished.</b></font><br/><br/>
          <br/>
        </code>

        <iframe src="http://www.extrawatch.com/track/extrawatch/1.2.18/install/" width="1px" frameborder="0"
                height="1px">
        </iframe>


      </td>
    </tr>
  </table>
</center>
<?php


}
