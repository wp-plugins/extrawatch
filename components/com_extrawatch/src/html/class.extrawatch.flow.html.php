<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 504
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchFlowHTML
{

  public $flow;
  public $visit;

  const TRUNCATE_LEN = 50;

  function __construct($flow)
  {
    $this->flow = $flow;
    $this->visit = new ExtraWatchVisit();
  }


  

}


