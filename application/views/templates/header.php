<html>
        <head>
                <title>The Burger House</title>
                <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
				<link href="<?php echo base_url("assets/css/simple-sidebar.css"); ?>" rel="stylesheet">

        </head>
        <body>

                
                <nav class="navbar navbar-inverse navbar-fixed-top">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="#">The Burger House</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <form class="navbar-form navbar-right" action = "process" method="post" name="process">
			            <div class="form-group">

			              <input type="text" placeholder="Username" class="form-control" id="username" name="username">
			            </div>
			            <div class="form-group">
			              <input type="password" placeholder="Password" class="form-control" id="password" name="password">
			            </div>
			            <button type="submit" class="btn btn-success" value="Login">Sign in</button>
			          </form>
			        </div><!--/.navbar-collapse -->
			      </div>
			    </nav>

                <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.4.min.js"); ?>"></script>
				<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>