<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1217
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchMagentoUser implements ExtraWatchUser
{


  function getUsername()
  {
    return "matto";
  }
}


