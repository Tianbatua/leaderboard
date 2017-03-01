<div>
	<h2>Games and Players</h2>
</div>
<div class="row">
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