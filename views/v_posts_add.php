<div id="mainContent">
	<form method='POST' action='/posts/p_add'>

    	<label for='content'>New Post:</label><br>
    	<textarea name='content' id='content'></textarea>

    	<br><br>
    	<input type='submit' value='New post'>

    	<?php if(isset($error) && $error == 'error'): ?>
            <div class='error' id='error'>
                Cannot add an empty post.
            </div>
        <?php endif; ?>

	</form> 
</div>

