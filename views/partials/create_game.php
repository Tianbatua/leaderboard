<div class="container">
	<div class="row">
		<h2>Create New Game</h2>
		<p>You can add more players after you've created your first 2</p>
		<p>
			<span>
				<span style="color: #FF0000;">*</span> indicates a required field
			</span>
		</p>
	</div>

	<div class="col-md-4 col-md-offset-5" id="form">
		<form action="../controllers/creategame.php" method="post">
			<div class="row" style="text-align: left">
				<label><span style="color: #FF0000;">*</span> Name of the Game:</label><br>
				<input type="input" maxlength="40" name="game_name" tabindex="1" value="" required>
			</div>
			<div class="row" style="text-align: left">
				<label><span style="color: #FF0000;">*</span> Game Description:</label><br>
				<textarea name="game_description" rows="4" cols="32" tabindex="2" required></textarea>
			</div>
			<div class="row" style="text-align: left">
				<label><span style="color: #FF0000;">*</span> Player1:</label><br>
				<input type="input" maxlength="40" name="player1" tabindex="1" value="" required>
			</div>
			<div class="row" style="text-align: left">
				<label><span style="color: #FF0000;">*</span> Player2:</label><br>
				<input type="input" maxlength="40" name="player2" tabindex="1" value="" required>
			</div>
			<div class="row" style="text-align: left">
				<label> Player3:</label><br>
				<input type="input" maxlength="40" name="player3" tabindex="1" value="">
			</div>
			<div class="row" style="text-align: left">
				<label> Player4:</label><br>
				<input type="input" maxlength="40" name="player4" tabindex="1" value="">
			</div>
			<div class="row" style="text-align: left">
				<label> Player5:</label><br>
				<input type="input" maxlength="40" name="player5" tabindex="1" value="">
			</div>
			<div class="row" style="margin-top: 10px; text-align: left">
				<input type="submit" name="submit">
			</div>			
		</form>
	</div>
</div>

