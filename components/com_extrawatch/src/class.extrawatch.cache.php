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
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
    die('Restricted access');

class ExtraWatchCache
{

    public $database;
    public $helper;
    public $config;
    public $date;

    function __construct($database)
    {
        $this->database = $database;
        $this->helper = new ExtraWatchHelper($this->database);
        $this->config = new ExtraWatchConfig($this->database);
        $this->date = new ExtraWatchDate($this->database);
    }

    /**
     * cache
     */
    function getCachedItem($key)
    {
        $time = $this->date->getUTCTimestamp();
        $query = sprintf("select cache, lastUpdate from #__extrawatch_cache where `key` = '%s' limit 1", $this->database->getEscaped($key));
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        $cacheInterval = @ $this->config->getConfigValue('EXTRAWATCH_' . $key);
        if ($time - @ $cacheInterval < @ $row->lastUpdate) {
            return @ $row->cache;
        } else {
            return FALSE;
        }

    }

    /**
     * cache
     */
    function storeCachedItem($key, $cache)
    {
        $query = sprintf("select cache, lastUpdate from #__extrawatch_cache where `key` = '%s' limit 1", $this->database->getEscaped($key));
        $rows = @ $this->database->objectListQuery($query);
        $row = @ $rows[0];
        $time = $this->date->getUTCTimestamp();
        if (!@ $row->cache) {
            // insert
            $cache = addslashes($cache);
            $query = sprintf("insert into #__extrawatch_cache (id, `key`, lastUpdate, cache) values ('','%s', '%d', '%s' )", $this->database->getEscaped($key), (int)$time, $this->database->getEscaped($cache));
            $this->database->executeQuery($query);
        } else {

            $cache = addslashes($cache);
            $query = sprintf("update #__extrawatch_cache set lastUpdate = '%d', cache = '%s' where `key` = '%s' limit 1", (int)$time, $this->database->getEscaped($cache), $this->database->getEscaped($key));
            $this->database->executeQuery($query);
        }

    }

    /**
     * cache
     */
    static function clearCache($database)
    {
        $query = sprintf("delete from #__extrawatch_cache");
        $database->executeQuery($query);
    }
}

