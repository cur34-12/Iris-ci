<html>
        <head>

				<!-- Latest compiled and minified bootswatch CSS, in the future it would be cool to have the user be able to select between day and night mode from their settings or something -->
				<!--night mode--><link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
                                <!--day mode--><!--<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">-->

                                <!-- Custom CSS -->
                                <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

                                <!--bootstrap JS-->
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                                <!-- Jquery -->
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

                                <!--Setup the responsive viewport stuff-->
                                <meta name="viewport" content="width=device-width, initial-scale=1">

        </head>
        <body>
        <nav class="navbar navbar-default">
        	<div class="container-fluid">
        		<div clas="navbar-header">
        			<a class="navbar-brand" href="<?php echo base_url(); ?>">LOGI</a>
        		</div>
        		<div id="navbar">
        			<ul class="nav navbar-nav">
        				<li><a href="<?php echo base_url(); ?>">Home</a></li>
        				<li><a href="<?php echo base_url(); ?>about">About</a></li>
                                        <li><a href="<?php echo base_url(); ?>vehicles">Vehicles</a></li>
                                        <li><a href="<?php echo base_url(); ?>equipment">Equipment</a></li><!--Not yet implemented-->
                                        <form class="navbar-form navbar-left">
                                                <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                </div>
                                                <button type="submit" class="btn btn-default">Search</button>
                                        </form>
        			</ul>
                                <ul class="nav navbar-nav navbar-right">
                                        <li><a href="<?php echo base_url(); ?>auth/login">Login</a></li> <!-- Not yet implemented -->
                                </ul>
        		</div>
        	</div>
        </nav>
        <script>
                $('.nav.navbar-nav > li').on('click', function(e) {
                        $('.nav.navbar-nav > li').removeClass('active');
                        $(this).addClass('active');
                });
        </script>
        <div class="container">