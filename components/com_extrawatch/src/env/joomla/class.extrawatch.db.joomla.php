<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 743
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
    die('Restricted access');
}

class ExtraWatchDBWrapJoomla implements ExtraWatchDBWrap
{

    public $database;
    public $env;

    function __construct()
    {
        $this->env = ExtraWatchEnvFactory::getEnvironment();
        $this->database = &JFactory::getDBO();
    }


    /**
     * query without a result
     *
     * @param unknown_type $query
     */
    function executeQuery($query)
    {
        $this->database->setQuery($query);
        if (version_compare(JVERSION,"3.0","<")) {
            $result = $this->database->query();
        } else {
            $result = $this->database->execute();
        }
        if ($this->database->getErrorNum() > 0) {
            ExtraWatchLog::error(__FILE__, __LINE__, $query);
        }
        return $result;
    }

    /**
     * Query with single result
     *
     * @param unknown_type $query
     * @return unknown
     */
    function resultQuery($query)
    {
        $this->database->setQuery($query);
        if ($this->database->getErrorNum() > 0) {
            ExtraWatchLog::error(__FILE__, __LINE__, $query);
        }
        $result = $this->database->loadResult();
        return $result;
    }

    /**
     * Query with multiple results as objects
     *
     * @param unknown_type $query
     * @return unknown
     */
    function objectListQuery($query)
    {
        $this->database->setQuery($query);
        if ($this->database->getErrorNum() > 0) {
            ExtraWatchLog::error(__FILE__, __LINE__, $query);
        }
        $rows = @ $this->database->loadObjectList();
        return $rows;
    }

    /**
     * Query with multiple results as asoc list
     *
     * @param unknown_type $query
     * @return unknown
     */
    function assocListQuery($query)
    {
        $this->database->setQuery($query);
        $result = $this->database->query();
        if ($this->database->getErrorNum() > 0) {
            ExtraWatchLog::error(__FILE__, __LINE__, $query);
        }
        $rows = $this->database->loadAssocList();
        return $rows;
    }

    /**
     * only proxy, should be removed
     *
     * @param unknown_type $query
     */
    function setQuery($query)
    {
        $this->database->setQuery($query);
    }

    /**
     * only proxy, should be removed
     *
     * @param unknown_type $query
     */
    function loadResult()
    {
        $result = $this->database->loadResult();
        /*        if ($this->database->getErrorNum() > 0) {
            ExtraWatchLog::error(__FILE__,__LINE__,$query);
        }*/
        return $result;
    }

    /**
     * only proxy, should be removed
     *
     * @param unknown_type $query
     */
    function query()
    {
        $result = $this->database->query();
        if ($this->database->getErrorNum() > 0) {
            ExtraWatchLog::error(__FILE__, __LINE__, $this->query);
        }
        return $result;
    }

    /**
     * only proxy, should be removed
     *
     * @param unknown_type $query
     */
    function getQuery()
    {
        $this->database->getQuery();
    }

    /**
    escape sql
     */
    function getEscaped($sql)
    {
        if (version_compare(JVERSION, "3.0", "<")) {
            return @$this->database->getEscaped($sql);
        } else {
            return @$this->database->escape($sql);
        }
    }

    function getErrorNum()
    {
        // TODO: Implement getErrorNum() method.
    }

    function loadAssocList($key = '')
    {
        // TODO: Implement loadAssocList() method.
    }

    /**
     * Query with multiple results as objects
     *
     * @param unknown_type $query
     * @return unknown
     */
    function loadObjectList($key = "")
    {
        return @ $this->database->loadObjectList();
    }

}



