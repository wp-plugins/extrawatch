<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 812
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */ 
 
defined('_JEXEC') or die('Restricted access'); 

 ?>

<span style='color: black;'>&nbsp;<?php echo (ExtraWatchDate::getActualDateTime()); ?></span>

<br/>
<?php echo($extraWatchBlockHTML->renderBlockedInfo(TRUE)); ?>

<table cellpadding='2' cellspacing='0' width='100%' border='0'>
  <tr>
    <td colspan='8'><h3><?php echo _EW_VISITS_VISITORS; echo $extraWatchHTML->renderOnlineHelp("visits"); ?></h3>
    </td>
  </tr>
  <?php echo ($extraWatchVisitHTML->renderVisitors()); ?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='8'><h3><?php echo _EW_VISITS_BOTS; echo $extraWatchHTML->renderOnlineHelp("visits-bots"); ?></h3>
    </td>
  </tr>
  <?php echo ($extraWatchVisitHTML->renderBots()); ?>
</table>
