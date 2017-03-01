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
	$playerid =	$_POST['playerid'];
	$r1 = $mainClassObj->rawQuery("update tbl_players set stats=stats+5 where id=".$playerid);
}
echo "success";
?>
