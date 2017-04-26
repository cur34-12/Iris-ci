<html>
        <head>
            <!-- Jquery + UI-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script>

            <!--full bootstrap js plugins-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

             <!--js plugin for the moment.js-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>
            <script type="text/javascript">moment().format();</script>

            <!--js for boostrap datetimepicker-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

			<!-- Stylesheets -->
			<!--night mode--><!--<link rel="stylesheet" href="https://bootswatch.com/solar/bootstrap.min.css">-->
            <!--day mode--><link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
            <!--orange mode--><!--<link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">-->

            <!--Predictive Select Boxes-->
            <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />-->
            <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>-->

            <!-- Custom CSS -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

            <!-- Jquery UI Css -->
            <link rel="stylesheet" ref="<?php echo base_url(); ?>css/jquery.ui.css">

            <!--Setup the responsive viewport stuff-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
        
        <body>
        <nav class="navbar navbar-default navbar-static-top">
        	<div class="container-fluid">
        		<div clas="navbar-header">
        			<a class="navbar-brand" href="<?php echo base_url(); ?>">LOGI</a>
        		</div>
        		<div id="navbar">
        			<ul class="nav navbar-nav">
        				<li><a href="<?php echo base_url(); ?>">Home</a></li>
        				<li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehicles<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>vehicles">List</a></li>
                                    <li><a href="<?php echo base_url(); ?>lists">AEL</a></li>
                                    <li><a href="<?php echo base_url(); ?>issues">Issues</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>vehicles/edit">Edit</a></li>
                                    <li><a href="<?php echo base_url(); ?>vehicles/create">Create</a></li>
                                    <li><a href="<?php echo base_url(); ?>vehicles/delete">Delete</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipment<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>equipment">Register</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/lists">Lists</a></li>
                                    <li><a href="<?php echo base_url(); ?>issues">Issues</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/issuing">Q Store</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/loans">Loans</a></li>
                                </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>attendance">Attendance</a></li><!--Not yet implemented-->
                                        
        			</ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                        <li><?php
                                if( isset( $auth_user_id ) ){
                                    echo anchor( site_url('examples/logout'),'Logout');
                                }else{
                                    echo anchor( site_url(LOGIN_PAGE . '?redirect=examples'),'Login');
                                }
                            ?>
                        </li>
                    </ul>
        		</div>
        	</div>
        </nav>
        <div class="container">