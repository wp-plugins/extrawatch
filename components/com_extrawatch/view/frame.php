<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 388
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

defined('_JEXEC') or die('Restricted access'); ?>


<?php if (true) {?>
<iframe src="http://www.codegravity.com/space/extrawatch/1.2.18/<?php echo $extraWatch->env->getEnvironmentName();?>/?<?php echo time(); ?>&env=<?php echo get_class($extraWatch->env);?>"
        width="468" height="60" frameborder="0" marginwidth="0" marginheight="0" scrolling="no">
</iframe>
<?php } ?>



