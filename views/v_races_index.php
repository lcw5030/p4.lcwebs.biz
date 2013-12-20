
<div id="mainContent">
<?php foreach($races as $race): ?>

	<article id="raceEvent">

	    <label for='race_name'>Race Name:</label>
	    <p><?=$race['race_name']?></p>
	    <label for='race_date'>Race Date:</label>
	    <p><?=$race['race_date']?></p>
	    <label for='race_start_time'>Race Start Time:</label>
	    <p><?=$race['race_start_time']?></p>
	    <label for='race_fee' id='race_fee'></input>
	    <p><?=$race['race_fee']?></p>

<form class="form_comment" method='POST' action='/users/p_register/<?=$race['race_id']?>'>
<br>
<input type='submit' value='Register'><br><br>
</form> 

	</article>

<?php endforeach; ?>
</div>
