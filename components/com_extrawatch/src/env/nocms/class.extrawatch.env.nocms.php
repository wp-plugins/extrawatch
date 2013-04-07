<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 611
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))
  die('Restricted access');

class ExtraWatchNoCMSEnv implements ExtraWatchEnv
{
  const EW_ENV_NAME = "nocms";

  function getDatabase()
  {
    return new ExtraWatchDBWrapNoCMS();
  }

  function getRequest()
  {
    return new EnvRequest();
  }

  function & getURI()
  {
    return "fakeURL";
  }

  function isSSL()
  {
    //TODO change
    return FALSE;
  }

    function getRootSite()
    {
        //print_r($_SERVER);
        $hostname = "http://" . $_SERVER['HTTP_HOST'];
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $subdir = str_replace("index.php", "", $scriptName);
		
		$url = parse_url($hostname . $subdir);
		$liveSitePath = $url['path'];

        return $liveSitePath;
    } 
	
  function getAdminDir()
  {
    return "";
  }


  function getCurrentUser()
  {
    return $this->getUsername();
  }

  function getUsersCustomTimezoneOffset()
  {
    return 0;
  }

  function getEnvironmentSuffix()
  {
    return "extrawatch/";
  }

  function renderLink($task, $otherParams)
  {
    return "?task=$task&action=$otherParams";
  }

  function getUser()
  {
    return "matto";
  }

  function getTitle()
  {
    return "title";
  }

  function getUsername()
  {
    return "matto";
  }

  function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
  {
    //TODO send mail
  }

  function getDbPrefix()
  {
	$db = $this->getDatabase();
    return $db->dbprefix;
  }

  function getTimezoneOffset()
  {
    return 0; //TODO must implement
  }

  function getAllowedDirsToCheckForSize()
  {
    // TODO: Implement getDirsToCheckForSize() method.
  }

  function getDirsToCheckForSize($directory)
  {
    $dirs = array();

    $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = "../";
    $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = "../";

    $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "../";
    $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = "../";

    return $dirs;
  }

  /**
   * env
   * @return unknown
   */
  function getAgentNotPublishedMsg($database)
  {
    //TODO implement
    return FALSE;
  }


    public function getAdminEmail()
    {
        // TODO: Implement getUserEmail() method.
    }

    function getFormKey() {
        return "";
    }

    public function getReviewLink()
    {
        // TODO: Implement getReviewLink() method.
    }

    public function getVoteLink()
    {
        // TODO: Implement getVoteLink() method.
    }

    public function getEnvironmentName()
    {
        return self::EW_ENV_NAME;
    }
}


