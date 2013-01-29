<?php

/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 1.2.18
 * @revision 488
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by Matej Koval - All rights reserved!
 * @website http://www.codegravity.com
 */

if (!defined('_JEXEC')) {
    define('_JEXEC', 1);
}
$env = @$_REQUEST['env'];
$jBasePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR;
define('JPATH_BASE', $jBasePath);
if (!defined('JPATH_BASE2')) {
    define('JPATH_BASE2', $jBasePath);
}

$frontend = @$_REQUEST['frontend'];

// compatibility with ZOO
if (defined('JVERSION') && version_compare( JVERSION, '2.5.0', '<' )) {
    $mainframe = & JFactory :: getApplication('site');
    $mainframe->initialise();
}

$env = @$_REQUEST['env'];
if ($env == "ExtraWatchMagentoEnv") {
    $GLOBALS['mageRunCode'] = true;
}

require_once JPATH_BASE . "components" . DIRECTORY_SEPARATOR . "com_extrawatch" . DIRECTORY_SEPARATOR . "includes.php";


$extraWatch = new ExtraWatch();
require_once JPATH_BASE . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR . "com_extrawatch" . DIRECTORY_SEPARATOR . "lang" . DIRECTORY_SEPARATOR . $extraWatch->config->getLanguage() . ".php";
$extraWatchHTML = new ExtraWatchHTML();
$extraWatch->block->checkPermissions();
$env = @$_REQUEST['env'];
?>

var rand='<?php echo $extraWatch->config->getRand(); ?>';

var lastTimeoutId = null;
var statsTimeoutId = null;
var visitsTimeoutId = null;
var refreshStopped = false;

var last=null;
var lastId=null;
var http=null;
var day = 0;
var week = 0;
var expanded = new Array();
var statsType = "0";

var traffic = 0;

function extrawatch_setDay(_day) {
day = _day;
document.getElementById(_day).innerHTML = "<?php echo(_EW_STATS_LOADING_WAIT); ?>";
extrawatch_sendStatsReq();
}
function extrawatch_setStatsType(_statsType) {
statsType = _statsType;
document.getElementById(_statsType).innerHTML = "<?php echo(_EW_STATS_LOADING); ?>";
extrawatch_sendStatsReq();
}
function extrawatch_setWeek(_week) {
week = _week;
document.getElementById("visits_" + _week).innerHTML = "<?php echo(_EW_STATS_LOADING_WAIT); ?>";
extrawatch_sendStatsReq();
}

function extrawatch_createRequestObject() {
var ro;
if(window.ActiveXObject){
ro = new ActiveXObject("Microsoft.XMLHTTP");
}else{
ro = new XMLHttpRequest();
}
return ro;
}

function extrawatch_sendLastIdReq() {
try {
http4 = extrawatch_createRequestObject();
http4.onreadystatechange = extrawatch_needLastIdRefresh;
var newdate = new Date();
var url = "<?php echo($extraWatch->config->getLiveSiteWithSuffix()); ?>components/com_extrawatch/ajax/last.php?rand=" + rand + "&timeID="+newdate.getTime() + "&traffic="+traffic + "&env=<?php echo($env); ?>";
http4.open("GET", url, true);
http4.send(null);
}
catch (err) {
alert(err);
try {
if ((window.ActiveXObject && err.message.substring(0,17) == "Permission denied") || (!window.ActiveXObject  && err.substring(0,17) == "Permission denied"))
alert("<?php echo(_EW_AJAX_PERMISSION_DENIED_1); ?>&nbsp;<?php echo($extraWatch->config->getLiveSite()); ?>&nbsp;<?php echo(_EW_AJAX_PERMISSION_DENIED_2); ?>&nbsp;<?php echo($extraWatch->config->getLiveSite()); ?>&nbsp;<?php echo(_EW_AJAX_PERMISSION_DENIED_3); ?>&nbsp;<?php echo(str_replace("www.", "", $extraWatch->config->getLiveSite())); ?><?php echo(_EW_AJAX_PERMISSION_DENIED_4); ?>");
} catch(err2) {
alert(err2);
}
}
}

function extrawatch_sendVisitsReq() {
try {
http = extrawatch_createRequestObject();
http.onreadystatechange = needVisitsRefresh;
var newdate = new Date();
var url = "<?php echo($extraWatch->config->getLiveSiteWithSuffix()); ?>components/com_extrawatch/ajax/visits.php?rand=" + rand + "&timeID="+newdate.getTime() + "&traffic="+ traffic + "&env=<?php echo($env); ?>";
http.open("GET", url, true);
http.send(null);
}
catch (err) {
alert(err);
try {
if ((window.ActiveXObject && err.message.substring(0,17) == "Permission denied") || (!window.ActiveXObject  && err.substring(0,17) == "Permission denied"))
alert("<?php echo(_EW_AJAX_PERMISSION_DENIED_1); ?>&nbsp;<?php echo($extraWatch->config->getLiveSite()); ?>&nbsp;<?php echo(_EW_AJAX_PERMISSION_DENIED_2); ?>&nbsp;<?php echo($extraWatch->config->getLiveSite()); ?>&nbsp;<?php echo(_EW_AJAX_PERMISSION_DENIED_3); ?>&nbsp;<?php echo(str_replace("www.", "", $extraWatch->config->getLiveSite())); ?><?php echo(_EW_AJAX_PERMISSION_DENIED_4); ?>");
} catch(err2) {
alert(err2);
}
}

}

function extrawatch_sendStatsReq() {
try {
http2 = extrawatch_createRequestObject();
http2.onreadystatechange = needStatsRefresh;
var newdate = new Date();
var url = "<?php echo($extraWatch->config->getLiveSiteWithSuffix()); ?>components/com_extrawatch/ajax/stats.php?rand=" + rand + "&timeID="+newdate.getTime() + "&env=<?php echo($env); ?>";
if (day != 0) url += "&day="+day;
if (week != 0) url += "&week="+week;

<?php

foreach ($keysArray as $key) {
    echo("if (extrawatch_expand['" . $key . "']) url += '&" . $key . "=true';");
}
foreach ($keysArray as $key) {
    echo("if (extrawatch_expand['" . $key . "_total']) url += '&" . $key . "_total=true';");
} ?>

url += "&tab="+statsType;
http2.open("GET", url, true);
http2.send(null);
}
catch (err) {
alert(err);
}
}


function extrawatch_blockIpToggle(_ip) {
try {
if (confirm("<?php echo(_EW_STATS_IP_BLOCKING_TOGGLE); ?> " + _ip + " ?")) {
http3 = extrawatch_createRequestObject();
http3.onreadystatechange = history.go(0);
var newdate = new Date();
var url3 = "<?php echo($extraWatch->config->getLiveSiteWithSuffix()); ?>components/com_extrawatch/ajax/block.php?ip="+ _ip +"&rand=" + rand + "&timeID="+newdate.getTime()+ "&env=<?php echo($extraWatch->config->getEnvironment()); ?>";
http3.open("GET", url3, true);
http3.send(null);
extrawatch_sendStatsReq();
extrawatch_sendVisitsReq();
}
}
catch (err) {
alert(err);
}
}

function extrawatch_blockIpManually() {
try {
var ipManual = prompt("<?php echo(_EW_STATS_IP_BLOCKING_MANUALLY); ?>","");
if (ipManual) extrawatch_blockIpToggle(ipManual);
}
catch (err) {
alert(err);
}
}

function extrawatch_expand(_element) {
if (!extrawatch_expand[_element]) extrawatch_expand[_element] = true;
else extrawatch_expand[_element] = false;
document.getElementById(_element).innerHTML = "<?php echo(_EW_STATS_LOADING_WAIT); ?>";
extrawatch_sendStatsReq();
}

function extrawatch_needLastIdRefresh() {
if (http4.readyState == 4) {
if(http4.status == 200) {
if (http4.responseText != lastId) {
extrawatch_sendVisitsReq();
extrawatch_sendStatsReq();
lastId = http4.responseText;
}

lastTimeoutId = window.setTimeout("extrawatch_sendLastIdReq()",<?php echo($extraWatch->config->getConfigValue('EXTRAWATCH_UPDATE_TIME_STATS')); ?>);
}
}
}

/**
when there is an asynchronous response that refresh of visits is needed
*/
function needVisitsRefresh()
{
try {
if (http.readyState == 4)
{
if(http.status == 200)
{
document.getElementById("visits").innerHTML = http.responseText;

number = "";
for (i=0 ; i<11; i++ ) {
if (http.responseText.charAt(i) == '\n') break;
if (http.responseText.charAt(i) == '\r') break;
if (http.responseText.charAt(i) == ' ') break;

number = number + http.responseText.charAt(i);
}

number = number.replace(/(<([^>]+)>)/ig,"");
parsedNumber = parseInt(number);

if (last != parsedNumber) {
last = parsedNumber;
fade("id" + last);
}
}
/*       visitsTimeoutId = window.setTimeout("extrawatch_sendVisitsReq()",<?php echo($extraWatch->config->getConfigValue('EXTRAWATCH_UPDATE_TIME_VISITS')); ?>); */
traffic += http.responseText.length;


}
} catch (err) {
alert(err);
}
}

function needStatsRefresh()
{
try {
if (http2.readyState == 4) {
if(http2.status == 200) {
document.getElementById("stats").innerHTML = http2.responseText;
traffic += http2.responseText.length;

<?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_IPINFODB_KEY")) { ?>
<?php if ($extraWatch->config->getConfigValue("EXTRAWATCH_MAP_GOOGLEMAP")) {
        if ($extraWatch->visit->getLastIp()) { ?>
        GoogleMapUpdate();
        <?php
        }
    } ?>
<?php
    
    ?>
<?php } ?>

} else {
}
/*    if(statsType != "2")  statsTimeoutId = window.setTimeout("extrawatch_sendStatsReq()",<?php echo($extraWatch->config->getConfigValue('EXTRAWATCH_UPDATE_TIME_STATS')); ?>); */
}
} catch (err) {
alert(err);
}
}
/* Custom variables */

/* Offset position of tooltip */
var x_offset_tooltip = 5;
var y_offset_tooltip = 0;

/* Don't change anything below here */


var ajax_tooltipObj = false;
var ajax_tooltipObj_iframe = false;

var ajax_tooltip_MSIE = false;
if(navigator.userAgent.indexOf('MSIE')>=0)ajax_tooltip_MSIE=true;


function ajax_showTooltip(externalFile,inputObj)
{
window.clearInterval(visitsTimeoutId);
window.clearInterval(statsTimeoutId);
refreshStopped = true;

if(!ajax_tooltipObj)    /* Tooltip div not created yet ? */
{
ajax_tooltipObj = document.createElement('DIV');
ajax_tooltipObj.style.position = 'absolute';
ajax_tooltipObj.id = 'ajax_tooltipObj';
document.body.appendChild(ajax_tooltipObj);


var leftDiv = document.createElement('DIV');    /* Create arrow div */
leftDiv.className='ajax_tooltip_arrow';
leftDiv.id = 'ajax_tooltip_arrow';
ajax_tooltipObj.appendChild(leftDiv);

var contentDiv = document.createElement('DIV'); /* Create tooltip content div */
contentDiv.className = 'ajax_tooltip_content';
ajax_tooltipObj.appendChild(contentDiv);
contentDiv.id = 'ajax_tooltip_content';

if(ajax_tooltip_MSIE){    /* Create iframe object for MSIE in order to make the tooltip cover select boxes */
ajax_tooltipObj_iframe = document.createElement('<iframe frameborder="0">');
    ajax_tooltipObj_iframe.style.position = 'absolute';
    ajax_tooltipObj_iframe.border='0';
    ajax_tooltipObj_iframe.frameborder=0;
    ajax_tooltipObj_iframe.style.backgroundColor='#FFF';
    ajax_tooltipObj_iframe.src = 'about:blank';
    contentDiv.appendChild(ajax_tooltipObj_iframe);
    ajax_tooltipObj_iframe.style.left = '0px';
    ajax_tooltipObj_iframe.style.top = '0px';
    }


    }
    // Find position of tooltip
    ajax_tooltipObj.style.display='block';
    ajax_loadContent('ajax_tooltip_content',externalFile);
    if(ajax_tooltip_MSIE){
    ajax_tooltipObj_iframe.style.width = ajax_tooltipObj.clientWidth + 'px';
    ajax_tooltipObj_iframe.style.height = ajax_tooltipObj.clientHeight + 'px';
    }

    ajax_positionTooltip(inputObj);
    }

    function ajax_positionTooltip(inputObj)
    {
    var leftPos = (ajaxTooltip_getLeftPos(inputObj) + inputObj.offsetWidth);
    var topPos = ajaxTooltip_getTopPos(inputObj);

    /*
    var rightedge=ajax_tooltip_MSIE? document.body.clientWidth-leftPos : window.innerWidth-leftPos
    var bottomedge=ajax_tooltip_MSIE? document.body.clientHeight-topPos : window.innerHeight-topPos
    */
    var tooltipWidth = document.getElementById('ajax_tooltip_content').offsetWidth +
    document.getElementById('ajax_tooltip_arrow').offsetWidth;
    // Dropping this reposition for now because of flickering
    //var offset = tooltipWidth - rightedge;
    //if(offset>0)leftPos = Math.max(0,leftPos - offset - 5);

    ajax_tooltipObj.style.left = leftPos + 'px';
    ajax_tooltipObj.style.top = topPos + 'px';


    }


    function ajax_hideTooltip()
    {
    ajax_tooltipObj.style.display='none';
    }

    function refreshStats() {
    if (refreshStopped) {
    visitsTimeoutId =
    window.setTimeout("extrawatch_sendVisitsReq()",<?php echo($extraWatch->config->getConfigValue('EXTRAWATCH_UPDATE_TIME_VISITS'));?>
    );
    statsTimeoutId =
    window.setTimeout("extrawatch_sendStatsReq()",<?php echo($extraWatch->config->getConfigValue('EXTRAWATCH_UPDATE_TIME_STATS'));?>
    );
    refreshStopped = false;
    }
    }

    function ajaxTooltip_getTopPos(inputObj)
    {
    var returnValue = inputObj.offsetTop;
    while((inputObj = inputObj.offsetParent) != null){
    if(inputObj.tagName!='HTML')returnValue += inputObj.offsetTop;
    }
    return returnValue;
    }

    function ajaxTooltip_getLeftPos(inputObj)
    {
    var returnValue = inputObj.offsetLeft;
    while((inputObj = inputObj.offsetParent) != null){
    if(inputObj.tagName!='HTML')returnValue += inputObj.offsetLeft;
    }
    return returnValue;
    }
    function setElementValueById(_id, _value) {
    document.getElementById(_id).value = _value;
    }
    function addElementValueById(_id, _value) {
    value = document.getElementById(_id).value;
    if (value) document.getElementById(_id).value +="\n";
    document.getElementById(_id).value += _value;
    }

    function toggleElementVisibility(id, flagit) {
    if (flagit=="1"){
    document.getElementById(id).style.display = "block";
    }
    else
    if (flagit=="0"){
    document.getElementById(id).style.display = "";
    }
    }

    function toggleDiv(id, ip, flagit) {
    var divElementId = "goal_" + id;

    if (flagit=="1"){
    var url = "<?php echo($extraWatch->config->getLiveSiteWithSuffix());?>components/com_extrawatch/ajax/vars.php?rand=<?php echo($extraWatch->config->getRand());?>&uriId=" + id + "&ip=" + ip +"&env=<?php echo($env);?>";
    jQuery.ajax( {
    url: url,
    success: function(result) {
    document.getElementById(divElementId).innerHTML = result;
    }
    });
    document.getElementById(divElementId).style.display = "block";
    }
    else
    if (flagit=="0"){
    document.getElementById(divElementId).style.display = "";
    }
    }

    function highlightDiv(id,flagit) {
    if (flagit=="1"){
    document.getElementById(id).style.textDecoration = "underline";
    }
    else
    if (flagit=="0"){
    document.getElementById(id).style.textDecoration = "";
    }
    }


    var cX = 0; var cY = 0; var rX = 0; var rY = 0;
    function UpdateCursorPosition(){ cX = event.pageX; cY = event.pageY;}
    function UpdateCursorPositionDocAll(){ cX = event.clientX; cY = event.clientY;}
    //if(document.all) { document.onmousemove = UpdateCursorPositionDocAll; }
    //else { document.onmousemove = UpdateCursorPosition; }

    function popupDiv(id, flagit) {
    if (flagit=="1"){
    document.getElementById(id).style.display = "block";
    if(self.pageYOffset) {
    rX = self.pageXOffset;
    rY = self.pageYOffset;
    }
    else if(document.documentElement && document.documentElement.scrollTop) {
    rX = document.documentElement.scrollLeft;
    rY = document.documentElement.scrollTop;
    }
    else if(document.body) {
    rX = document.body.scrollLeft;
    rY = document.body.scrollTop;
    }
    if(document.all) {
    cX += rX;
    cY += rY;
    }
    document.getElementById(id).style.left = cX + "px";
    document.getElementById(id).style.top = cY + "px";
    }
    else
    if (flagit=="0"){
    document.getElementById(id).style.display = "";
    }
    }


    //callback function to bring a hidden box back
    function effectCallback(effectElementId){
    setTimeout(function(){
    $("#"+effectElementId+":hidden").removeAttr('style').hide().fadeIn();
    }, 100);
    };

    /** usage: showEffect("visits2","bounce",500); */
    function showEffect(effectElementId, effectName, duration) {
    //alert(effectElementId);
    effectElementId = "#"+ effectElementId;
    //alert($("status"));
    var options = {};
    //alert($$("status"));
    $(effectElementId).show(effectName,options,duration,effectCallback(effectElementId));
    }

    /** usage:
    ajaxRequest("http://localhost:88/components/com_extrawatch/ajax/trendtooltip.php?rand=&group=12&name=/&date=14730","visits2");
    */
    function ajaxRequest(url, elementId, options) {
    $.get(url, options, //options
    function(response){
    $("#"+elementId+"").html(response);
    }
    );
    }

