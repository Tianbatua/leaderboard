<div>
	<?php 
		echo "<h2>".$game_info[0]['name']."</h2>";
	?>
</div>
<div class="row">
	<h4>Add More Players</h4>
	<span><span style="color: #FF0000;">*</span> indicates a required field</span>
</div>

<div id="form">
	<form action="../controllers/addplayers.php" method="post">
		<div class="row">
			<label><span style="color: #FF0000;">*</span> Player1:</label><br>
			<input type="input" maxlength="40" name="player1" tabindex="1" value="" required>
		</div>
		<div class="row">
			<label> Player2:</label><br>
			<input type="input" maxlength="40" name="player2" tabindex="1" value="">
		</div>
		<div class="row">
			<label> Player3:</label><br>
			<input type="input" maxlength="40" name="player3" tabindex="1" value="">
		</div>
		<div class="row">
			<label> Player4:</label><br>
			<input type="input" maxlength="40" name="player4" tabindex="1" value="">
		</div>
		<div class="row">
			<label> Player5:</label><br>
			<input type="input" maxlength="40" name="player5" tabindex="1" value="">
		</div>
		<?php
			echo "<input type='input' name='gameid' style='display:none;' value='".$game_id."'>"
		?>
		<div class="row" style="margin-top: 10px; color: green;">
			<input type="submit" name="submit" value="Add These Players">
		</div>			
	</form>
</div>