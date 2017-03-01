<?php
	require "../templates/leaderboard_header.php" ;

	$option_name = "";
	if(isset($_REQUEST['option']) && $_REQUEST['option'] != "") {
		$option_name = $_REQUEST['option'];
	}

	#list of schemas
	$games = "games";
	$players = "players";

	switch($option_name){					
		case 'add_players':		$include_page		=		'add_players.php';
								$page_title			=		'add players';
								$game_id    		= 		$_REQUEST['game'];
								$game_condition		=		"(id = '".$game_id."')";
								$game_info          =       $mainClassObj->getSchemaInfo($games, "*", $game_condition, "", "", "", "");
								break;

		case 'play':  			$include_page		=		"play.php";
								$page_title			=		"play";
								$game_id 			=		$_REQUEST['game'];
								$game_condition		=		"(id = '".$game_id."')";
								$game_info          =       $mainClassObj->getSchemaInfo($games, "*", $game_condition, "", "", "", "");
								$player_condition	= 		"(gameid = '".$game_id."')";
								$player_info		=	$mainClassObj->getSchemaInfo($players, "*", $player_condition, "", "stats", "desc", "");
								break;

		case 'join':			$include_page 		= 		"join_game.php";
								$page_title			=		"join";
								$games				=		$mainClassObj->getSchemaInfo($games, "*", "", "", "", "", "");
								break;

        case 'create':			$include_page		=		"create_game.php";
        						$page_title			= 		"create";
        						break;

        case 'add_success':		$include_page		=		"add_success.php";
        						$page_title			=		"add_success";
        						break;
        						
		default:	
								$include_page		=		"index.php";
								$page_title			= 		"Dashboard";
								$games				=		$mainClassObj->getSchemaInfo($games, "*", "", "", "", "", "");

		break;
	}

	// echo json_encode($games);

	require "partials/".$include_page;
?>
</div>
<?php require "../templates/leaderboard_footer.php"; ?>