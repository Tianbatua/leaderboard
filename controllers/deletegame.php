<?php
require ("../configs/db.config.php");
require ("../configs/url.config.php");
require ("../classes/main_class.php");

session_start();
$dbObj = new dbConnect;
$connect = $dbObj->connectDB();
global $pdoConObj;
$mainClassObj =	new dbClass();

$game_table = "games";
$player_table = "players";
$game_table_fields = "name, description";
$player_table_fields = "name, stats, gameid";

if(isset($_POST)) {
	$gameid			=	$_POST['gameid'];
	$r1 = $mainClassObj->rawQuery("delete from tbl_games where id=".$gameid);
	$r2 = $mainClassObj->rawQuery("delete from tbl_players where gameid=".$gameid);
	
	header("Location: ".GAME_URL."leaderboard.php?option=join");
}

?>