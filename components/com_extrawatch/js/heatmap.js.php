<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 927
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */
defined('_JEXEC') or die('Restricted access');

if (_EW_CLOUD_MODE) {
    $liveSite = _EW_SCRIPT_HOST._EW_SCRIPT_HOST_DIR;
} else {
    $liveSite = $extraWatch->config->getLiveSite();
}

?>
<script type='text/javascript' src='<?php echo $liveSite; ?>components/com_extrawatch/js/jdownloadurl.js'></script> \
<?php if (_EW_CLOUD_MODE) { ?>
    <script type='text/javascript' src='<?php echo $liveSite; ?>components/com_extrawatch/ajax/heatmap.include.js.php?env=<?php echo get_class($extraWatch->config->env);?>&amp;id=<?php echo($id);?>&amp;extraWatchHeatmap=<?php echo($extraWatch->helper->requestGet('extraWatchHeatmap'));?>&amp;extraWatchDay=<?php echo($extraWatch->helper->requestGet('extraWatchDay'));?>&amp;projectId="+extrawatch_projectId+"&amp;params="+encodeURIComponent(location.search)+"'></script> \
<?php } else { ?>
    <script type='text/javascript' src='<?php echo $liveSite; ?>components/com_extrawatch/ajax/heatmap.include.js.php?env=<?php echo get_class($extraWatch->config->env);?>&amp;id=<?php echo($id);?>&amp;extraWatchHeatmap=<?php echo($extraWatch->helper->requestGet('extraWatchHeatmap'));?>&amp;extraWatchDay=<?php echo($extraWatch->helper->requestGet('extraWatchDay'));?>&amp;params="+encodeURIComponent(location.search)+"'></script> \
<?php } ?>
<script type='text/javascript' src='<?php echo $liveSite; ?>components/com_extrawatch/js/heatmap/heatmap.js'></script> \
