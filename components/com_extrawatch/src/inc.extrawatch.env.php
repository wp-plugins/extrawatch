<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 198
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2012 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 **/
defined('_JEXEC') or die('Restricted access');

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "interface.extrawatch.env.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "interface.extrawatch.dbwrap.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "interface.extrawatch.setup.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "class.extrawatch.env.request.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "class.extrawatch.env.factory.php");

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "joomla" . DS . "class.extrawatch.env.joomla.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "joomla" . DS . "class.extrawatch.db.joomla.php");

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "wordpress" . DS . "class.extrawatch.env.wordpress.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "wordpress" . DS . "class.extrawatch.db.wordpress.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "wordpress" . DS . "class.extrawatch.setup.wordpress.php");

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "nocms" . DS . "class.extrawatch.db.nocms.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "nocms" . DS . "class.extrawatch.env.nocms.php");

require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "drupal" . DS . "class.extrawatch.db.drupal.php");
require_once (JPATH_BASE2 . DS . "components" . DS . "com_extrawatch" . DS . "src". DS ."env" . DS . "drupal" . DS . "class.extrawatch.env.drupal.php");

