<?php
include("../res/x5engine.php");
$nameList = array("f63","7hw","47g","knp","zev","75p","wxd","g5u","ukj","rlf");
$charList = array("8","L","2","Y","2","4","Y","K","J","E");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
