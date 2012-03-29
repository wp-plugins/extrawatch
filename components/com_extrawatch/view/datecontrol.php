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
defined('_JEXEC') or die('Restricted access');
?>


<table width='100%'>
    <tr>
        <td align='left'><?php echo("<a href='javascript:setDay($prev)' id='$prev'>&lt;" . ExtraWatchDate::getDateByDay($prev) . "<img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/calendar.gif' border='0' align='center' /></a>"); ?></td>
        <td align='center'><?php if ($day != $today) echo("<a href='javascript:setDay($today)' id='$today'>" . _EW_STATS_TODAY . "</a>"); ?></td>
        <td align='right'><?php if ($next <= $today) echo("<a href='javascript:setDay($next)' id='$next'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/icons/calendar.gif' border='0' align='center' />" . ExtraWatchDate::getDateByDay($next) . "&gt;</a>"); ?></td>
    </tr>
</table>
