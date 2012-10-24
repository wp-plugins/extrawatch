<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 448
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
    die('Restricted access');
}

if (!defined('_JEXEC')) {
    define('_JEXEC', 1);
}
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

$input = JFactory::getApplication()->input;
$task = $input->get('task');
JToolbarHelper::title('ExtraWatch 1.2.18.448 FREE');
require_once (JPATH_BASE.DS."components".DS."com_extrawatch".DS."admin.extrawatch.php");

?>
