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

if(isset($_POST)){
	$gameid 		=		$_POST['gameid'];
 	$player1		=		$_POST['player1'];
	$player2 		= 		$_POST['player2'];
	$player3 		= 		$_POST['player3'];
	$player4 		= 		$_POST['player4'];
	$player5 		= 		$_POST['player5'];

	$player1_value_list = "'".$player1."', 0,".$gameid;
	$mainClassObj->insertSchema($player_table, $player_table_fields, $player1_value_list);

    if(isset($player2) && $player2 != ""){
		$player2_value_list = "'".$player2."', 0,".$gameid;
		$mainClassObj->insertSchema($player_table, $player_table_fields, $player2_value_list);
	}
	if(isset($player3) && $player3 != ""){
		$player3_value_list = "'".$player3."', 0,".$gameid;
		$mainClassObj->insertSchema($player_table, $player_table_fields, $player3_value_list);
	}
	if(isset($player4) && $player4 != ""){
		$player4_value_list = "'".$player4."', 0,".$gameid;
		$mainClassObj->insertSchema($player_table, $player_table_fields, $player4_value_list);
	}
	if(isset($player5) && $player5 != ""){
		$player5_value_list = "'".$player5."', 0,".$gameid;
		$mainClassObj->insertSchema($player_table, $player_table_fields, $player5_value_list);
	}

	header("Location: ".GAME_URL."leaderboard.php?option=play&game=".$gameid);
}
?>