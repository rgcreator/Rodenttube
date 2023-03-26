<?php
include("../res/x5engine.php");
$nameList = array("zff","kjv","et4","6nz","jzd","jhj","r6l","gya","7gv","u8u");
$charList = array("T","U","J","Z","A","K","P","2","J","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
