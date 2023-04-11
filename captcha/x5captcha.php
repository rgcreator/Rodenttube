<?php
include("../res/x5engine.php");
$nameList = array("2e7","nau","8k2","8a3","dyy","rsp","5fg","zat","7v4","432");
$charList = array("A","A","A","E","2","3","D","H","T","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
