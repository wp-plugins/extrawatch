<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1254
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */

defined('_JEXEC') or die('Restricted access');

class ExtraWatchVisitHTML
{

  public $extraWatch;
  public $heatmap;
  public $heatmapHTML;

  function __construct($extraWatch)
  {
    $this->extraWatch = $extraWatch;
    $this->heatmap = new ExtraWatchHeatmap($this->extraWatch->database);
    $this->heatmapHTML = new ExtraWatchHeatmapHtml($this->extraWatch->database);
  }

  function getJoinedURIRows($bots, $ipFilter)
  {
    return $this->extraWatch->visit->getJoinedURIRows($bots, $ipFilter);
  }

  function renderGetVars($id)
  {
    $output = "";

    $query = sprintf("select * from #__extrawatch_uri_post where `uriid` = '%d' and `type` = '2' ", (int) $id);

    $rows = $this->extraWatch->visit->database->objectListQuery($query);
    if ($rows)
      foreach ($rows as $row) {
        $key = $row->key;
        $value = $row->value;

        $output .= "<tr><td>" . ExtraWatchHelper::htmlspecialchars($key) . ": </td><td>" . ExtraWatchHelper::htmlspecialchars($value) . "</td><td>" .
            "<a href='" . $this->extraWatch->config->renderLink("goals", "insert&id=" . $id . "&postid=" . $row->id) . "'
                        title='" . _EW_GOAL_ADD_SUBMITTED_VALUE . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal-add.gif' />" . _EW_VISIT_URL_PARAMETER_GOAL . "</a></td></tr>";
      }

    return $output;
  }


  function renderPostVars($id)
  {
    if ($this->extraWatch->config->isFree()) {
      return "<tr><td><span class='jwDisabled'>" . _EW_ADMINHEADER_NA_IN_THIS_VERSION . "</span></td></tr>";
    }
    $output = "";

    $query = sprintf("select * from #__extrawatch_uri_post where `uriid` = '%d' and `type` = '1' ", (int) $id);

    $rows = $this->extraWatch->visit->database->objectListQuery($query);
    if ($rows)
      foreach ($rows as $row) {
        $key = $row->key;
        $value = $row->value;

        $output .= "<tr><td>" . ExtraWatchHelper::htmlspecialchars($key) . ": </td><td>" . ExtraWatchHelper::htmlspecialchars($value) . "</td><td>" .
            "<a href='" . $this->extraWatch->config->renderLink("goals", "insert&id=" . $id . "&postid=" . $row->id) . "' title='" . _EW_GOAL_ADD_SUBMITTED_VALUE . "'><img src='" . $this->extraWatch->config->getLiveSiteWithSuffix() . "components/com_extrawatch/img/icons/goal-add.gif' />" . _EW_VISIT_SUBMITED_FROM_VARIABLE . "</a></td></tr>";
      }

    return $output;
  }

  /* visits */
  function renderTable($bots = FALSE, $ipFilter = FALSE, $renderAsEmail = FALSE)
  {
    $output = "";
    $rows = $this->getJoinedURIRows($bots, $ipFilter);
    $agentNotPublishedMessage = $this->extraWatch->env->getAgentNotPublishedMsg($this->extraWatch->database);

    if ($bots == FALSE && ($agentNotPublishedMessage != FALSE) && sizeof($rows) == 0) {
      $output .= "<tr><td colspan='10'><span style='color:red; font-weight: bold;'>".$agentNotPublishedMessage."</span></td></tr> ";
      return $output;
    } else if (!$rows) {

    if (!$bots && _EW_CLOUD_MODE) {

		$noDataHTML = "<br/><span style='color: red; font-weight: bold;'>";
	    $noDataHTML .= "Your project currently contains no data. Please include the following HTML code into every page of your website you want to monitor:<br/><br/>";
		$noDataHTML .= nl2br(htmlentities($this->extraWatch->helper->renderHTMLCodeSnippet(_EW_PROJECT_ID)));
		$noDataHTML .= "</span>";
	
	} else {
	
		$noDataHTML = ExtraWatchHelper::renderNoData();
	  }

		$output .= "<tr><td colspan='5'>" . $noDataHTML . "</td></tr>";
	  

	  
	  
      return $output;
    }

    /** if visits are empty */


    //$output = "";
    $i = 0xFF;

    $decrement = -1;

    $lastIp = ""; //to be able to hide flags / address for same IP in next rows
    $lastReferer = "";
    $lastColor = "";
    $rowNumber = 0;

    $dateToday = $this->extraWatch->date->jwDateToday();

    
    
	if (!$renderAsEmail) {
		$liveSiteWithSuffix = $this->extraWatch->config->getLiveSiteWithSuffix();
	} else {
		$liveSiteWithSuffix = $this->extraWatch->config->getDomainFromLiveSite(_EW_PROJECT_ID).($this->extraWatch->config->getLiveSiteWithSuffix());
	}

    if (@$rows)
      foreach ($rows as $row) {
        $rowNumber++;

        /* reset the values from previous iteration */

        $country = "none";
        $countryName = "";
        $countryUpper = "";
        $color = "";

		$inactiveClass = "";
		$inactiveImageClass = "";
        if ($row->inactive) {
            $inactiveClass = "class='extraWatchInactiveVisit'";
			$inactiveImageClass="class='extraWatchInactiveImage'";
        }


        $flag = "<img src='" . $liveSiteWithSuffix . "components/com_extrawatch/img/flags/$country.png' title='$countryName' alt='$countryName' $inactiveImageClass/>";
        if ($this->extraWatch->block->getBlockedIp($row->ip))
          $ipString = "<s>" . ExtraWatchHelper::htmlspecialchars($row->ip) . "</s>";
        else
          $ipString = ExtraWatchHelper::htmlspecialchars($row->ip);

        if ($i < 0xCC || $i <= 0x00) {
          $decrement = $decrement * -1;
        }
        $i = $i + $decrement;

        $color = sprintf("%x", $i) . sprintf("%x", $i) . sprintf("%x", $i);

        if ($bots == TRUE)
          $color = "ffffff";

        $country = $row->country;

        if (!$country) {
          $country = $this->extraWatch->helper->countryByIp($row->ip);
        }
        if (@ $country) {
          $countryName = $this->extraWatch->helper->countryCodeToCountryName($country);
          $flag = "<img src='" . $liveSiteWithSuffix . "components/com_extrawatch/img/flags/$country.png' title='$countryName' alt='$countryName' $inactiveImageClass/>";
          $countryUpper = strtoupper($country);
        }

        $userAgent = ExtraWatchHelper::htmlspecialchars($this->extraWatch->visit->getBrowserByIp($row->ip));

        $browser = "";
        $os = "";
        $browserIcon = "";
        $osIcon = "";

        if (@ $userAgent) {
          $browser = $this->extraWatch->referer->identifyBrowser(@ $userAgent);
          if (@ $browser)
            $browserIcon = $liveSiteWithSuffix . "components/com_extrawatch/img/icons/" . strtolower($browser) . ".gif";

          if (@ $browserIcon)
            $browser = "<img src='$browserIcon' alt='$userAgent' title='$userAgent' $inactiveImageClass/>";

          $os = json_decode(@$this->extraWatch->referer->identifyOSAsJSON(@ $userAgent));
          if (@ $os->name)
            $osIcon = $liveSiteWithSuffix . "components/com_extrawatch/img/icons/" . strtolower($os->icon);

          if (@ $osIcon)
            $os = sprintf("<img src='%s' alt='%s' title='%s' $inactiveImageClass/>", $osIcon, $userAgent, $userAgent);
        }
		


          //$output .= $rowNumber;

        if ($bots == TRUE && $osIcon)
          continue; // bot icon fix
        if ($bots == TRUE) {
          $osIcon = $liveSiteWithSuffix . "components/com_extrawatch/img/icons/blank.gif";
          $browserIcon = $liveSiteWithSuffix . "components/com_extrawatch/img/icons/blank.gif";
          $browser = sprintf("<img src='%s' alt='%s' title='%s' $inactiveImageClass/>", ExtraWatchHelper::htmlspecialchars($browserIcon), ExtraWatchHelper::htmlspecialchars($userAgent), ExtraWatchHelper::htmlspecialchars($userAgent));
          $os = sprintf("<img src='%s' alt='%s' title='%s' $inactiveImageClass/>", ExtraWatchHelper::htmlspecialchars($osIcon), ExtraWatchHelper::htmlspecialchars($userAgent), ExtraWatchHelper::htmlspecialchars($userAgent));
        }



		  

        $username = "";
        if (@ $row->username) {
          $username = "<br/><a href='" . $this->extraWatch->config->getAdministratorIndex() . "?option=com_users&task=view&search=$row->username' style='color: black; text-decoration:none;'><i>" . @ ExtraWatchHelper::htmlspecialchars($row->username) . "</i></a>";
        }
        $ipString = sprintf("<a id='%s' href='javascript:extrawatch_blockIpToggle(\"%s\");extrawatch_sendVisitsReq();' style='color:black;' $inactiveClass>%s</a>", ExtraWatchHelper::htmlspecialchars($row->ip), ExtraWatchHelper::htmlspecialchars($row->ip), $ipString);

        
        $mapsIcon = "<img src='" . $liveSiteWithSuffix . "components/com_extrawatch/img/icons/map_icon.gif' border='0' " .
            $this->extraWatch->helper->getTooltipOnEvent() . "=\"ajax_showTooltip('" . $this->extraWatch->config->getLiveSite() . $this->extraWatch->env->getEnvironmentSuffix() .
            $this->extraWatch->env->renderAjaxLink('ajax','tooltip')."&rand=".
            $this->extraWatch->config->getRand() . "&ip=$row->ip&env=" .
            $this->extraWatch->config->getEnvironment() . "&projectId="._EW_PROJECT_ID."',this);return FALSE\"/>";

         $timeOfVisit = $this->extraWatch->helper->secondsToHumanFormat(@$row->timeDiff);

          $displayCountryFlag = FALSE;
          if ($lastIp != $row->ip) {
          $lastTimestamp = $row->timestamp;
          $displayCountryFlag = TRUE;
          $lastIp = $row->ip;
          $rowNumber = 1;
        } else {
          $flag = ""; // do not display flag, ip if the IP is same sa previous
          $ipString = "";
        }

        if (!$displayCountryFlag) {
          $username = "";
          $browser = "";
          $os = "";
          $mapsIcon = "";
          $timeOfVisit = "";
        }

        if ($lastReferer != $row->referer) {
          $output .= $this->renderRefererRow($lastReferer, $color);
          $lastReferer = $row->referer;
          $lastColor = $color;
        }
        $dateOfVisit = ExtraWatchDate::date("d.m.Y", $row->timestamp);
        if (isset($this->lastDate) && $this->lastDate != $dateOfVisit) {
          $output .= "<tr><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'><td style='background-color: #" . $color . ";'></td></td><td style='background-color: #" . $color . ";'></td><td style='background-color: #" . $color . ";'></td><td colspan='8' style='background-color: #" . $color . ";' colspan='3'>$dateOfVisit</td></tr>";
          $this->lastDate = $dateOfVisit;
        }
        $output .= "<tr><td valign='top' align='left' style='background-color: #$color'></td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $mapsIcon . "</td><td valign='top' align='left' style='background-color: #$color; color: #999999;'>";


        if (!$countryUpper) {
          $output .= "<a href='" . $this->extraWatch->config->renderLink("goals", "insert&country=" . @$countryUpper) . "' style='color: #999999;' title='" . _EW_VISITS_ADD_GOAL_COUNTRY . "'>" . @ $countryUpper . "</a>";
        }



        $output .= "</td><td valign='top' align='left' style='background-color: #$color;'>" . @ $flag . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'><span $inactiveClass>$ipString</span>";


          $output .= "$username</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $browser . "</td>
																		<td valign='top' align='left' style='background-color: #$color;'>" . @ $os . "</td>
																		<td valign='top' align='left' style='background-color: #$color;' width='100%'>";

        $day = $this->extraWatch->date->jwDateFromTimestamp($row->timestamp);

        $downloadsForIp = $this->extraWatch->downloads->getDownloadLogForIPBetweenTimestamps($row->ip, $lastTimestamp, $row->timestamp);
        $timestampHumanReadable = ExtraWatchDate::date("H:i:s", $row->timestamp);

        $downloadIcon = "<img src='".$liveSiteWithSuffix."components/com_extrawatch/img/icons/downloads.png' $inactiveImageClass />";
		if (@$downloadsForIp) {
			foreach($downloadsForIp as $download) {
				$downloadTimestampHumanReadable = ExtraWatchDate::date("H:i:s", $download->timestamp);
				$output .= "<span $inactiveClass>".$downloadTimestampHumanReadable." $downloadIcon ".$download->dname."</span><br/>";
			}
		}

          $goalsForIp = $this->extraWatch->goal->getGoalsForVisitIdBetweenTimestamps($row->visitId, $lastTimestamp, $row->timestamp);
          if (@$goalsForIp) {
              foreach($goalsForIp as $goalForIp) {
                  $goalTimestampHumanReadable = ExtraWatchDate::date("H:i:s", $goalForIp->timestamp);

                  $goalLink =  "<a href='" . $this->extraWatch->config->renderLink("goals", "edit&goalId=".((int)$goalForIp->goalId)."") . "' target='_blank'>".$goalForIp->name."</a>";

                  $output .= "<span style='background-color: #FFEFA7' $inactiveClass>".$goalTimestampHumanReadable.sprintf(_EW_VISITS_GOAL_REACHED, $goalLink)."</span><br/>";
              }
          }
        $lastTimestamp = $row->timestamp;

		$trucateCharLimit = $this->extraWatch->config->getConfigValue('EXTRAWATCH_TRUNCATE_VISITS');
		  
        $uriTruncated = $this->extraWatch->helper->truncate($row->uri, $trucateCharLimit);
        $titleOriginal = $row->title;
        $row->title = $this->extraWatch->helper->truncate($row->title, $trucateCharLimit);
        $row->title = $this->extraWatch->helper->removeRepetitiveTitle($row->title);

        $uri2titleId = $this->extraWatch->visit->getUri2TitleId($row->uri, $titleOriginal);
        $output .= ("<div id='id$row->id' style='text-decoration: none;' $inactiveClass onmouseout=\"toggleElementVisibility('goal_" . $row->id . "',0);\"  onmouseover=\"toggleDiv('".$row->id."','".$row->ip."',1, $uri2titleId, $day);\" style='background-color: #$color'>");

		$projectSite = "";
        if ($renderAsEmail) {
			$projectSite = $this->extraWatch->config->getDomainFromLiveSite(_EW_PROJECT_ID);
		}
        $output .= ("$timestampHumanReadable <a href='".$projectSite.$row->uri."' target='_blank' $inactiveClass>$row->title</a> $uriTruncated");

         

        $clicks = @$uri2HeatmapClicksAssoc[$row->uri];
        if (@$clicks) {
          if (@$maxClicksOfDay) {
            $ratio = $clicks / $maxClicksOfDay;
            $color = ExtraWatchHelper::rgbFromRatio($ratio);
          }
          if ($userHeatmapClicks > 0) {
            $output .= "&nbsp;" . _EW_HEATMAP_OF . "&nbsp;";
          }
          $output .= $this->heatmapHTML->renderHeatmapLink($row->uri, $uri2titleId, $day, "&nbsp;<img src='" . $liveSiteWithSuffix . "components/com_extrawatch/img/icons/heatmap.png' title='" . _EW_HEATMAP_CLICK_OPEN . "'/> <span style='color: " . $color . "' title='" . _EW_HEATMAP_CLICK_OPEN . "'>$clicks</span>");
        }
        

        $paramData = $this->extraWatch->visit->areParamDataForUri($row->id);

        if ($paramData) {
          $output .= "<img src='" . $liveSiteWithSuffix . "components/com_extrawatch/img/icons/submit.png' />";
        }



		if (!$renderAsEmail) {
			/* ad as goal link */
			$output .= ("<div id='goal_" . $row->id . "' style='display: none; margin: 0px; padding: 2px; left: 40%;' class='uriDetailDiv'>" . _EW_STATS_LOADING);
			$output .= ("</div>");
		}
        if ($timeOfVisit) {
            $output .= "&nbsp;"._EW_TIME_BETWEEN_VISITS.":&nbsp;<img src='" . $liveSiteWithSuffix . "components/com_extrawatch/img/icons/clock.png' align='' $inactiveImageClass />&nbsp;$timeOfVisit";
        }
	    $output .= ("</div>");




        //TODO handle post data
        if ($paramData) {
          $postImage = "<div id='idp$row->id' onmouseout=\"toggleDiv('post_" . $row->id . "',0, $uri2titleId, $day);\" onmouseover=\"toggleDiv('post_" . $row->id . "',1, $uri2titleId, $day);\">";
        } else {
          $postImage = "";
        }

        $output .= $postImage;


        /* show only last URI, not all by user */
        if ($this->extraWatch->config->getCheckboxValue('EXTRAWATCH_ONLY_LAST_URI')) {
          break;
        }

        $output .= ("</td>");
        $output .= ("</tr>");

      }        

   
    $output .= @$this->renderRefererRow($lastReferer, $lastColor);

    unset($uri2HeatmapClicksAssoc);
 
    return $output;
  }

  function renderRefererRow($referer, $color)
  {
    if (!$referer) {
      return;
    }
    $output = "<tr>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'></td>
        <td style='background-color: #" . $color . "'>";

    $refererTruncated = $this->extraWatch->helper->truncate($referer);
    $output .= sprintf("<i style='color: gray;'> " . _EW_VISITS_CAME_FROM . ": <a href='%s' target='_blank' style='color: gray;' title='%s'>%s</a></i>", ExtraWatchHelper::htmlspecialchars($referer), ExtraWatchHelper::htmlspecialchars($referer), $refererTruncated);

     
    

    $phrase = $this->extraWatch->visit->extractPhraseFromUrl($referer);
    if (@$phrase) {
      $hostname = $this->extraWatch->visit->extractHostnameFromUrl($referer);
      $referer = $hostname . "/search?q=" . urlencode($phrase);
      $output .= sprintf("<br/><i style='color: gray;'>" . _EW_VISITS_CAME_FROM_KEYWORDS . ": [<a href='%s' target='_blank' style='color: gray;' title='%s'>%s</a>]</i>", ExtraWatchHelper::htmlspecialchars($referer), ExtraWatchHelper::htmlspecialchars($referer), ExtraWatchHelper::htmlspecialchars(urldecode($phrase)));
    }
    $output .= "</tr>";

    return $output;

  }

  /* visits */
  function renderVisitors()
  {
    //$rows = $this->extraWatch->visit->getVisitors();
    $this->lastDate = "";
    $output = $this->renderTable(FALSE);
    return $output;
  }

  /* visits */
  function renderBots()
  {

    //$rows = $this->extraWatch->visit->getBots();
    $this->lastDate = "";
    $output = $this->renderTable(TRUE);

    return $output;
  }

}


