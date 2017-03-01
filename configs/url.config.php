<?php
####################################################################
#	File Name	:	url.config.php
#	Location	: 	/WEBROOT/configs/
####################################################################

# Getting Server's Document root path
define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT'].'/leaderboard/');

define("SITE_URL", "http://".$_SERVER["HTTP_HOST"]."/leaderboard/"); 
define("GAME_URL", SITE_URL."views/");

define("URL_404", SITE_URL."file-not-found/");
?>

