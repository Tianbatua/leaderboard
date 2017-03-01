<div class="row" style="padding: 5px; background-color: #b5e1ec">
	<?php 
		echo "<div class='col-md-4'><a class='btn btn-success' role='button' type='button' href='leaderboard.php?option=add_players&game=".$game_info[0]['id']."'>ADD PLAYERS</a></div> ";
		echo "<div class='col-md-4'>
				<form action='../controllers/startover.php' method='post'>
					<input type='input' name='gameid' style='display:none;' value='".$game_info[0]['id']."'><input type='submit' class='btn btn-success' value='START OVER'>
				</form>
			</div>";
		echo "<div class='col-md-4'>
				<form action='../controllers/deletegame.php' method='post'>
					<input type='input' name='gameid' style='display:none;' value='".$game_info[0]['id']."'><input type='submit' class='btn btn-success' value='DELETE GAME'>
				</form>
			</div>"
	?>
</div>

<div>
	<?php 
		echo "<h2>".$game_info[0]['name']."</h2>";
		echo "<p style='color: #03a9d2;'>".$game_info[0]['description']."</p>";
	?>
	<h3>Players and Current Stats</h3>
</div>

<table class="table" style="margin-top:50px;" id="playertable">
	<tbody>
		<?php
			// echo json_encode($player_info);
		    foreach($player_info as $key => $value) {
		    	echo "<tr class='updatestats' style='cursor:pointer;' id='".$value['id']."' value='".$value['name']."'><td>".$value['name']."</td><td>".$value['stats']."</td></tr>";
		    }
		?>
	</tbody>
</table>

<hr style="border-width:10px;">
	
<div style="margin-left: 300px;">
	<h3 id="note">Click a player to select</h3>
	<div class="row" id="op" style="display:none;">
		<div class="col-md-4">
			<p id="op_name">name</p>
		</div>
		<div class="col-md-4">
			<button id='fivepts'>GIVE 5 POINTS</button>
		</div>
	</div>
</div>
