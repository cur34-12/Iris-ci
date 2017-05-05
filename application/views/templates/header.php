<html>
        <head>

            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta http-equiv="content-language" content="<?php echo $lang ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="keywords" content="<?php echo  $meta_keywords ?>">
            <meta name="description" content="<?php echo  $meta_description ?>">

            <!-- Jquery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

            <!--full bootstrap js plugins-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

            <!--bootstrap min JS, not sure if there is a difference between this and the above-->
            <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

             <!--js plugin for the datetime picker-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>
            <script type="text/javascript">
                moment().format();
            </script>
            <!--js for boostrap datetimepicker-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

			<!-- Latest compiled and minified bootswatch CSS, in the future it would be cool to have the user be able to select between day and night mode from their settings or something -->
			<!--night mode--><!--<link rel="stylesheet" href="https://bootswatch.com/solar/bootstrap.min.css">-->
            <!--day mode--><link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
            <!--orange mode--><!--<link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">-->

            <!-- Custom CSS -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

            <!--Setup the responsive viewport stuff-->
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
            <!-- font-awesome CSS -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" type="text/css" /> 
            <!-- bootstrap CSS -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css" type="text/css" /> 
            <!-- CIFullCalendar CSS -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fullcalendar-3.0.1/fullcalendar.min.css" type="text/css" /> 
            <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fullcalendar-3.0.1/fullcalendar.print.css" media="print" />
            <!-- custom CSS --> 
            <link rel="stylesheet" href="<?php echo base_url();?>assets/bootlaces/css/calendar.profile.custom.css" type="text/css" /> 
            <link rel="stylesheet" href="<?php echo base_url();?>assets/bootlaces/css/clock.css" type="text/css" />
            <link rel="stylesheet" href="<?php echo base_url();?>assets/bootlaces/css/jquery.minicolors.css" type="text/css" /> 
            <link rel="stylesheet" href="<?php echo base_url();?>assets/bootlaces/css/profile.css" type="text/css" />    
            <link rel="stylesheet" href="<?php echo base_url();?>assets/bootlaces/css/layout.css" type="text/css" />    

            <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places&language=<?php echo $lang ?>&key=<?php echo $key ?>" type="text/javascript"></script>   

            <div id="alertShow" class="alert alert-info" data-alert="alert"></div>  




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