<div class="row">
	<div style="text-align: center;">
		<h2>Got Your Game Face?</h2>
	</div>
</div>
<div class="row">
	<div style="text-align: center; color: #03a9d2">
		<h4>This is a simple app that allows you to create games, add players and track points.</h4>
	</div>
</div>
<div>
	<h4>Latest Games and Players</h4>
</div>
<div>
	<table class="table">
		<tbody>
			<?php
			   foreach($games as $key => $value) {
			   	$result = $mainClassObj->rawQuery('select * from tbl_players where gameid='.$value["id"]);
			   	echo "<tr><td><a href= 'leaderboard.php?option=play&game=".$value["id"]."' class='btn btn-info' role='button' type='button' title='PLAY'>PLAY</a></td><td>".$value['name']."</td><td>".$result."</td></tr>";
			   }
			?>
		</tbody>
	</table>
</div>
