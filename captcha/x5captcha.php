<?php
include("../res/x5engine.php");
$nameList = array("ymd","pas","5rx","d35","m4w","4rr","vcd","ndk","psy","avu");
$charList = array("D","F","K","L","6","7","D","4","T","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
