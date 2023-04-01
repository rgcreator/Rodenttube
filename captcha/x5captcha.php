<?php
include("../res/x5engine.php");
$nameList = array("fmh","7wp","pjd","ngh","hzu","g58","xdr","5vp","hd8","25w");
$charList = array("P","J","E","M","G","J","W","N","5","2");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
