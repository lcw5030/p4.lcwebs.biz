<div id="mainContent">
	 
	<form method='POST' action='/races/p_add'>

    	<label for='content'>New Race:</label><br>
    	<label for='race_name'>Race Name:</label>
    	<input name='race_name' id='race_name'></input>
    	<label for='race_date'>Race Date:</label>
    	<input type='date' name='race_date' id='race_date'></input>
    	<label for='race_start_time'>Race Start Time:</label>
    	<input name='race_start_time' id='race_start_time'></input>
    	<label for='race_name'>Race Fee:</label>
    	<input name='race_fee' id='race_fee'></input>
    	<br><br>
    	<input type='submit' value='New Race Event'>
    	<script>
    	$('#race_fee').spinner({
    min: 25,
    max: 2500,
    step: 25,
    numberFormat: "C"
});

				$( "#race_date" ).datepicker({ dateFormat: "yy-mm-dd" });


		// getter
		var dateFormat = $( "#race_date" ).datepicker( "option", "dateFormat" );
		// setter
		$( "#race_date" ).datepicker( "option", "dateFormat", "yy-mm-dd" );

		$('#race_fee').currency();
		</script>
	</form> 
</div>

