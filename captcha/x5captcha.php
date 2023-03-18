<?php
include("../res/x5engine.php");
$nameList = array("u6g","har","hkf","j63","mm8","uky","pfh","kpg","3jl","y58");
$charList = array("Z","R","T","Y","K","V","G","7","G","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
