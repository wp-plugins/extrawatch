<?php

session_start();

define("DS","/");
define("_JEXEC",1);
define("ENV",1);
define("JPATH_BASE2",dirname(__FILE__).DS."extrawatch");
$path = realpath(".").DS."extrawatch";

require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."config.php");
require_once ("extrawatch".DS."components".DS."com_extrawatch".DS."src".DS."inc.extrawatch.env.php");

require_once($path. DS. "components" . DS . "com_extrawatch" . DS . "includes.php");
require_once($path. DS. "administrator" . DS . "components" . DS . "com_extrawatch" . DS . "install.extrawatch.php");

$env = ExtraWatchEnvFactory::getEnvironment();
$database = $env->getDatabase("");

$email = $_POST['email'];
$url = $_POST['urlToMonitor'];
$action = $_POST['action'];

require_once("ClassMathGuard.php");

include("view/header.php");

$isCorrectAnswer = MathGuard :: checkResult(@$_REQUEST['mathguard_answer'], @$_REQUEST['mathguard_code']);

if ($action == 'formSubmitted' && !$isCorrectAnswer) {
	echo("<center><span style='color: red'>Wrong security answer!</span></center>");
}

if ($action != 'formSubmitted' || !$isCorrectAnswer) {
?>
<center>
<table align='center'><tr><td>
	<form action="sendmail.php" method='POST'>
	<h2>Please finish your registration</h2><br/>

	<b>email:</b> <?php echo $_POST['email']; ?> <br/><br/>
	<b>url:</b> <?php echo $_POST['urlToMonitor']; ?><br/><br/>

	<input type='hidden' name='email' value='<?php echo $_POST['email']; ?>'/>
	<input type='hidden' name='urlToMonitor' value='<?php echo @$_POST['urlToMonitor']; ?>'/>
	<input type='hidden' name='action' value='formSubmitted'/>
	<?php
	MathGuard::insertQuestion();
	?>
	<br/>
	<input type='submit' name='button' value='Finish Registration'/>
	</form>
	</td>
	</tr>
</table>
</center>
<?php 
die();
}


if (!$url || !$email) {
	die("not enough parameters");
}



$id = $database->resultQuery(sprintf("select id from global_extrawatch_user where email = ('%s')  ", $email));
if (!@$id) {
	$generatedPassword = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789') , 0 , 6 );
	$result = $database->executeQuery(sprintf("insert into global_extrawatch_user (`email`, `password`) values ('%s', '%s')  ", $email, $generatedPassword));

	$userId = $database->resultQuery(sprintf("select max(id) from global_extrawatch_user where email = '%s' ", $email));
	$result = $database->executeQuery(sprintf("insert into global_extrawatch_project (userId, url) values ('%s','%s')  ", $userId, $url));
	$projectId = $database->resultQuery(sprintf("select max(id) from global_extrawatch_project where userId = '%d' ", $userId));

} else {
	echo("user $email already found, resending email");
	die();
	$userId = $id;
}




$extraWatch = new ExtraWatchMain();

$body = "Welcome user $email <br/> your password is: $generatedPassword<br/><br/><br/>";

$body .= "Please include the followith HTML code: <br/>";
$body .= nl2br(htmlentities($extraWatch->helper->renderHTMLCodeSnippet($projectId)));

$body .= "<br/>To check your stats, please use the login information above to log into: <a href='http://stats.extrawatch.com'>stats.extrawatch.com</a>";


ExtraWatchHelper::sendEmail(ExtraWatchEnvFactory::getEnvironment(), $email, "info@extrawatch.com","ExtraWatch HTML code to monitor your website $url",$body, "info@codegravity.com");


echo("<br/><br/>&nbsp;<br/><br/><center>Thank you for your registration, please check your email how to include the HTML code into your website. <br/>
<br/>
After including the HTML code, &gt;&gt;&gt;<a href='http://stats.extrawatch.com'>LOG IN</a>&lt;&lt;&lt; to see your stats
</center>");

