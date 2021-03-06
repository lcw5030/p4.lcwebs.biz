<!DOCTYPE html>
<html>

<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta charset="UTF-8">
	<link rel="description" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

	<!-- JS/CSS File we want on every page -->
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>
<div id="wrapper" title="template">	
    <header>Where runners come together</header>
	<nav>
                <menu type="toolbar">
                        
                        <?php if($user): ?>
                                <li><a href='/users/profile'>View Profile</a></li>
                                <li><a href='/users/calculator'>Pace Calculator</a></li>
                                <li><a href='/posts/add'>Add Post</a></li>
                                <li><a href='/races/add'>Add Race Event</a></li>
                                <li><a href='/races/'>View All Race Events</a></li>
                                <li><a href='/posts/'>View Posts</a></li>
                                <li><a href='/posts/users'>Follow users</a></li>
                                <li><a href='/users/logout'>Logout</a></li>
                        <?php else: ?>
                                <li><a href='/users/signup'>Sign up</a></li>
                                <li><a href='/users/login'>Log in</a></li>
                        <?php endif; ?>
                        
                </menu>
    </nav>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <footer>
        RunSpot is an application for Harvard Extension CSCI E-15 built by Lisa Weber<br/>
        Photo credit belongs to http://parrotheadjeff.com/ 
    </footer>
</div>
</body>


</html>