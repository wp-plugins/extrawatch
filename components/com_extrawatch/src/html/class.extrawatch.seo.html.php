<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 596
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS')) {
  die('Restricted access');
}

class ExtraWatchSEOHTML
{

  public $extraWatch;
  public $extraWatchStatHTML;

  function __construct($extraWatch)
  {
    $this->extraWatch = $extraWatch;
    $this->extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
  }

  
}


