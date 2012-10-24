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

class CodeGravity_ExtraWatch_Model_Mysql4_ExtraWatch extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the extrawatch_id refers to the key field in your database table.
        $this->_init('extrawatch/extrawatch', 'extrawatch_id');
    }
}