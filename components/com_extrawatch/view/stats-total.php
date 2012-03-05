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
defined('_JEXEC') or die('Restricted access');
?>

<table border="0">
<tr>
    <td colspan='5'>
        <h3><?php echo(_EW_STATS_ALL_TIME_TITLE); echo $extraWatchHTML->renderOnlineHelp("all-time-stats"); ?></h3>
    </td>
    <?php
    foreach ($keysArray as $key) {
        if ($key == 'ip' && !$extraWatch->config->getConfigValue('EXTRAWATCH_IP_STATS')) {
            continue;
        }
        ?>
        <tr>
            <td colspan='4'>
                <u><?php echo(_EW_STATS_ALL_TIME) . "&nbsp;"; echo (@constant('_EW_STATS_' . strtoupper($key))); ?></u>
            </td>
        </tr>
        <tr>
            <td valign='top'><?php echo $extraWatchStatHTML->renderIntValuesByName($key, @ExtraWatchHelper::requestGet($key . "_total"), true); ?></td>
        </tr>
        <tr>
            <td colspan='4'>&nbsp;</td>
        </tr>

        <?php
    }
    ?>
</table>

