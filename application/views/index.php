<?php

?>

<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>My Form page</title>
		<meta name="description" content="A really cool site!">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    </head>
    <style type="text/css">
    	.col-xs-12 {
    		background-color: #A1B1B3;
    		border-bottom: solid black 2px;
    	}
    	.hero-unit {
    		border: solid silver 2px;
    	}
    </style>
    <body>
    	<div id='container'>
    		<header class='row'><!-- NAVBAR -->
    			<nav class="navbar navbar-default">
					<div class="container-fluid">
					    <div class="navbar-header">
					      <a class="navbar-brand" href="#">Test App</a>
					      <ul class='nav nav-tabs'>
					      	<li><a href="">Home</a></li>
					      	<li><a href="">Sign In</a></li>
					      </ul>
					    </div>
					</div>
				</nav>
    		</header><!-- END NAVBAR -->

    		<div class="hero-unit"><!-- HEADER -->
              <h1>Welcome to the Test</h1>
              <p>We're going to build a cool application using a MVC framework! This application was built by Charles139!</p>
              <p>
                <a class="btn btn-primary btn-large">
                  Start
                </a>
              </p>
            </div><!-- END HEADER -->

            <div class='row'><!-- MAIN -->
            	<div class='col-xs-4'>
            		<h4>Manage Users</h4>
            		<p>Using this application, you'll learn how to add, remove, and edit users for the application</p>
            	</div>
            	<div class='col-xs-4'>
            		<h4>Leave Messages</h4>
            		<p>Using this application, you'll learn how to add, remove, and edit users for the application</p>
            	</div>
            	<div class='col-xs-4'>
            		<h4>Edit User Information</h4>
            		<p>Using this application, you'll learn how to add, remove, and edit users for the application</p>
            	</div>
            </div><!-- END MAIN -->
    	</div><!-- END Container
    </body>
</html>