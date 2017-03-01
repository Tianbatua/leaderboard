<?php 
####################################################################
#	File Name	:	leaderboard_header.php
#	Location	:	/WEBROOT/admin/templates/
####################################################################

require ("../configs/db.config.php");
require ("../configs/url.config.php");
require ("../classes/main_class.php");

session_start();
$dbObj = new dbConnect;
$connect = $dbObj->connectDB();
global $pdoConObj;
$mainClassObj =	new dbClass();

?>
<!DOCTYPE html>
<html>
<head>
	<title>LeaderBoard</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../views/assets/css/style.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="/leaderboard">
					<h1 style="text-align: center;">LeaderBoard</h1>
				</a>
			</div>
		</div>
		<hr/>
		<div class="row" style="background-color: #313e43">
			<div class="col-md-12" style="padding: 10px; text-align: center;">
				<a href="leaderboard.php?option=create" class="btn btn-warning" type="button">CREATE GAME</a>
				<a href="leaderboard.php?option=join" class="btn btn-info" type="button">JOIN EXSITING GAME</a>
			</div>
		</div>
	
<!-- HEADER END-->