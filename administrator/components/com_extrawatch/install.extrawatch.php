<?php

/**
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 58
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) die('Restricted access');

function sureRemoveDir($dir, $DeleteMe)
{
    if (!$dh = @opendir($dir)) return;
    while (false !== ($obj = readdir($dh))) {
        if ($obj == '.' || $obj == '..') continue;
        if (!@unlink($dir . '/' . $obj)) sureRemoveDir($dir . '/' . $obj, true);
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
        $fileName = $rootDir . DS . "components" . DS . "com_extrawatch" . DS . "sql" . DS . "extrawatch-$j.sql";
        $lines = file($fileName);
        if (!$lines) {
            //die("<span style='color: red'>Error reading file: $fileName, your joomla site path is set to: ".$rootDir." what is probably not correct, check configuration.php</span><br/>");
        }

        $query = "";
        foreach ($lines as $line_num => $line) {
            $query .= trim($line);
            if (strstr($line, ");")) {
                if ($j % 20 == 0)
                    echo ((floor((($j) / $numberOfFiles) * 100)) . "%");
                else if ($j % 2 == 0)
                    echo (".");
                $database->setQuery(trim($query));
                $result = $database->query();
                if (!$result)
                    echo ("Error: " + $database->getQuery());
                flush();
                $query = "";
                $i++;
            }
        }
    }
    try {
        // @sureRemoveDir(dirname($fileName), false);
    } catch (Exception $e) {
        echo 'Cannot remove directory with SQL files: ', $e->getMessage(), "\n";
    }
}

function extrawatch_initialize_menu($database)
{
    $query = "UPDATE #__components SET admin_menu_img='../components/com_extrawatch/icons/extrawatch-logo-16x16.gif' WHERE admin_menu_link='option=com_extrawatch'";
    $database->setQuery(trim($query));
    $database->query();

    $query = "DELETE FROM #__extrawatch_config where name like 'rand' ";
    $database->setQuery(trim($query));
    $database->query();
    $query = "DELETE FROM #__components where admin_menu_link like '%option=com_extrawatch%'  and admin_menu_img like '%../components/com_extrawatch/icons/%' and admin_menu_img<>'../components/com_extrawatch/icons/extrawatch-logo-16x16.gif'";
    $database->setQuery(trim($query));
    $database->query();

    $rand = rand();
    $query = "INSERT INTO #__extrawatch_config (id, name, value) values ('', 'rand', '$rand') ";
    $database->setQuery(trim($query));
    $database->query();

    $query = sprintf("select id from #__components where `name` = '%s' limit 1", "ExtraWatch");
    $database->setQuery(trim($query));
    $id = $database->loadResult();


    $query = sprintf("INSERT INTO #__components values ('', 'Live Stats', '', 0, %d, 'option=com_extrawatch', '', '', 0, '../components/com_extrawatch/icons/map_icon.gif', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("INSERT INTO #__components values ('', 'SEO', '', 0, %d, 'option=com_extrawatch&task=seo', '', '', 1, '../components/com_extrawatch/icons/seo.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("INSERT INTO #__components values ('', 'Heatmap', '', 0, %d, 'option=com_extrawatch&task=heatmap', '', '', 2, '../components/com_extrawatch/icons/heatmap.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Traffic Flow', '', 0, %d, 'option=com_extrawatch&task=flow', '', '', 3, '../components/com_extrawatch/icons/flow.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Graphs & Trends', '', 0, %d, 'option=com_extrawatch&task=graphs', '', '', 4, '../components/com_extrawatch/icons/trend_icon.gif', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Goals', '', 0, %d, 'option=com_extrawatch&task=goals', '', '', 5, '../components/com_extrawatch/icons/goal.gif', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Visit History', '', 0, %d, 'option=com_extrawatch&task=history', '', '', 6, '../components/com_extrawatch/icons/history.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Anti-spam & Blocking', '', 0, %d, 'option=com_extrawatch&task=antiSpam', '', '', 7, '../components/com_extrawatch/icons/antispam.gif', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Email Reports', '', 0, %d, 'option=com_extrawatch&task=emails', '', '', 8, '../components/com_extrawatch/icons/emails.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Your License', '', 0, %d, 'option=com_extrawatch&task=license', '', '', 9, '../components/com_extrawatch/icons/license.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Database Status', '', 0, %d, 'option=com_extrawatch&task=status', '', '', 10, '../components/com_extrawatch/icons/status.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Modules / Components Sizes', '', 0, %d, 'option=com_extrawatch&task=sizes', '', '', 11, '../components/com_extrawatch/icons/sizes.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Settings', '', 0, %d, 'option=com_extrawatch&task=settings', '', '', 12, '../components/com_extrawatch/icons/settings.gif', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Update', '', 0, %d, 'option=com_extrawatch&task=update', '', '', 13, '../components/com_extrawatch/icons/update.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
    $query = sprintf("   INSERT INTO #__components values ('', 'Credits', '', 0, %d, 'option=com_extrawatch&task=credits', '', '', 14, '../components/com_extrawatch/icons/credits.png', 0, '', 1)", (int)$id);
    $database->setQuery($query);
    $database->query();
}

function com_install()
{

    @ set_time_limit(0);

    $mainframe = & JFactory :: getApplication('site');
    $mainframe->initialise();
    $database = & JFactory :: getDBO();

    if ("1.5" == "1.5" && !version_compare(JVERSION, '1.6.0', '<')) {
        echo("<span style='color: red'><h2>Error: You are using joomla " . JVERSION . " but the installation package is for version 1.5 ! Uninstall this version, <a href='http://www.codegravity.com/download'>Go to download section</a>, download the package for Joomla " . JVERSION . ", and install again.</h2></span>");
        return -1;
    } else if ("1.5" == "1.6" && !version_compare(JVERSION, '1.6.0', '>=')) {
        echo("<span style='color: red'><h2>Error: You are using joomla " . JVERSION . " but the installation package is for version 1.5 ! Uninstall this version, <a href='http://www.codegravity.com/download'>Go to download section</a>, download the package for Joomla " . JVERSION . ", and install again.</h2></span>");
        return -1;
    }

    ?>
<center>
    <table width="100%" border="0">
        <tr>
            <td></td>
            <td>
                <strong>ExtraWatch </strong><br/>
                <font class="small">&copy; Copyright 2006-2012 by Matej Koval - <a href='http://www.codegravity.com'
                                                                                     target='_blank'>www.codegravity.com</a><br/>
                    This component is copyrighted software. Distribution is prohibited.</font><br/>
            </td>
        </tr>
        <tr>
            <td colspan="2"><br/>
                <code>Installation Process :<br/>
                    <?php
                    extrawatch_initialize_menu($database);
                    extrawatch_initialize_ip2country(JPATH_SITE, $database);
                    ?>
                    <br/><br/>
                    <font color="green"><b>Installation finished.</b></font><br/><br/>
                    <br/>
                </code>

                <iframe src="http://www.codegravity.com/track/extrawatch/1.2.14/install/" width="1px" frameborder="0"
                        height="1px">
                </iframe>


            </td>
        </tr>
    </table>
</center>
<?php


}

?>
