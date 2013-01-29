<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 481
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchHeatmapHTML
{

  public $extraWatch;
  public $extraWatchHeatmap;
  public $stat;
  public $extraWatchStatHTML;

  const TRUNCATE_LEN = 80;

  function __construct($database)
  {
    $this->extraWatch = new ExtraWatch();
    $this->extraWatchHeatmap = new ExtraWatchHeatmap($database);
    $this->visit = new ExtraWatchVisit();
    $this->extraWatchStat = new ExtraWatchStat($database);
    $this->extraWatchStatHTML = new ExtraWatchStatHTML($this->extraWatch);
  }

  
}
