<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 733
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

/** ensure this file is being included by a parent file */
if (!defined('_JEXEC') && !defined('_VALID_MOS'))  {
  die('Restricted access');
}

class ExtraWatchJoomlaEnv implements ExtraWatchEnv
{
  const EW_ENV_NAME = "joomla";

  function getDatabase()
  {
    return new ExtraWatchDBWrapJoomla();
  }

  function getRequest()
  {
    return new JRequest();
  }

  function & getURI()
  {
    return JFactory::getURI();
  }

  function isSSL()
  {
    return JFactory::getURI()->isSSL();
  }

  function getRootSite()
  {
	$url = parse_url(JURI::root());
    $liveSitePath = $url['path'];
    if (@strstr($liveSitePath, "/components/com_extrawatch")) {
      $liveSitePath = str_replace("/components/com_extrawatch", "", $liveSitePath);
    }
    $liveSitePath = str_replace("ajax/","", $liveSitePath);
    return $liveSitePath;
  }

  function getAdminDir()
  {
    return "administrator";
  }

  function getCurrentUser()
  {
    return JFactory::getUser();
  }


  function getUsersCustomTimezoneOffset()
  {
    $user = $this->getUser();
    return $user->getParam('timezone');
  }

  function getEnvironmentSuffix()
  {
    return "";
  }

  function renderLink($task, $otherParams)
  {
    return $this->getRootSite() . $this->getAdminDir() . "/index.php?option=com_extrawatch&task=" . $task . "&action=". $otherParams;
  }

  function getUser()
  {
    global $mainframe;
    $current_error_reporting = error_reporting();
    error_reporting(0);
    if (version_compare(JVERSION, '1.5.0', 'ge')) {
      /* joomla 1.5 or above */
      $user = JFactory::getUser();
    } else {
      $user = @ $mainframe->getUser();
    }
    error_reporting($current_error_reporting);
    return $user;

  }

  function getTitle()
  {
    global $mainframe;
    if (version_compare(JVERSION, '1.5.0', 'ge')) {
      /* joomla 1.5 or above */
      $mydoc =& JFactory::getDocument();
      return $mydoc->getTitle();
    } elseif (version_compare(JVERSION, '1.0.0', 'ge')) {
      /* joomla 1.0 */
      return $mainframe->getPageTitle();
    }
  }

  function getUsername()
  {
    $user = JFactory::getUser();
    return $user->username;
  }


  function sendMail($recipient, $sender, $recipient, $subject, $body, $true, $cc, $bcc, $attachment, $replyto, $replytoname)
  {
        $body = ("<html><body>".$body."</body></html>");
        if (version_compare(JVERSION, "1.6.0", "ge")) {
            jimport( 'joomla.mail.mail' );
            $mailer = JFactory::getMailer();
            $mailer->setSender($sender);
            $mailer->addRecipient($recipient);
            $mailer->setSubject($subject);
            $mailer->setBody($body);
            $mailer->isHTML();
            $mailer->send();
			return TRUE;
        } else {
            jimport( 'joomla.utilities.utility' );
            return JUtility::sendMail("$recipient", "$sender", "$recipient", "$subject", "$body", 1);
        }

  }

  function getDbPrefix()
  {
    $config = new JConfig;
    return $config->dbprefix;
  }

  function getTimezoneOffset()
  {
    $conf =& JFactory::getConfig();
      if ($conf instanceof JRegistry) { //Joomla 3.0

          $timezoneName = $conf->toObject()->offset;
          $userTimezone = $this->timezoneNameToOffset($timezoneName);
          return $userTimezone;

      } else {
        return $conf->getValue('config.offset');
      }
  }

    private function timezoneNameToOffset($timezoneName) {
        if (is_numeric($timezoneName)) {
            return $timezoneName;
        }
        $dtz = new DateTimeZone($timezoneName);
        $time = new DateTime('now', $dtz);
        $userTimezone = $time->format('Z') / 3600;
        return $userTimezone; // timezone difference in seconds / 3600
    }

    function getAllowedDirsToCheckForSize()
  {
    $dirs = array(
      "../../../administrator/components/",
      "../../../administrator/modules/",
      "../../../components/",
      "../../../modules/");
    return $dirs;
  }

  function getDirsToCheckForSize($directory)
  {
    $dirs = array();

    $dirs[ExtraWatchSizes::SCAN_DIR_MAIN] = "../$directory/";
    $dirs[ExtraWatchSizes::SCAN_DIR_ADMIN] = "../administrator/$directory/";

    $dirs[ExtraWatchSizes::REAL_DIR_MAIN] = "../../../$directory/";
    $dirs[ExtraWatchSizes::REAL_DIR_ADMIN] = "../../../administrator/$directory/";

    return $dirs;
  }

  /**
   * env
   * @return unknown
   */
  function getAgentNotPublishedMsg($database) {
    $query = sprintf("select published from #__modules where module = 'mod_extrawatch_agent' order by id desc limit 1; ");
    $published = $database->resultQuery($query);
    if (!$published) {
      return _EW_AGENT_NOT_PUBLISHED_ERROR_JOOMLA;
    }
    return FALSE;
  }


    public function getAdminEmail()
    {
        if ($this->getUser()) {
            return $this->getUser()->email;
        }
        return "@";
    }

    function getFormKey() {
        return "";
    }

    public function getReviewLink()
    {
        return "http://extensions.joomla.org/extensions/site-management/visitors/3940/review";
    }

    public function getVoteLink()
    {
        return "http://extensions.joomla.org/extensions/site-management/visitors/3940";
    }

    public function getEnvironmentName()
    {
        return self::EW_ENV_NAME;
    }
}

