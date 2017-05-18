<html>
        <head>
            <!--Setup the responsive viewport stuff-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- Jquery / UI -->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

            <!-- Full bootstrap js plugins-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>

            <!-- JS Time Parser-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>

            <!-- JS for DateTimePicker -->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

            <!-- Jquery UI Style -->
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">

			<!-- Bootstrap Theme -->
            <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">

            <!-- Custom CSS -->
            <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

            <!-- Init of the Date Parser-->
            <script type="text/javascript">
                moment().format();
            </script>

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
                                    <li><a href="<?php echo base_url(); ?>vehicles">Register</a></li>
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
                                    <li><a href="<?php echo base_url(); ?>issues">Issues</a></li>
                                    <li><a href="<?php echo base_url(); ?>loans">Loans</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/edit">Edit</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/create">Create</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/delete">Delete</a></li>
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
                        <?php if ($this->ion_auth->logged_in()): ?>   
                            <li><?php echo $this->ion_auth->user()->row()->username; ?></li>
                            <li><?php echo anchor( site_url('profile/logout'),'Logout'); ?></li> 
                        <?php elseif (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()): ?>  
                            <li><?php echo anchor(LOGIN_PAGE, 'Login'); ?></li>
                        <?php endif ?>  
                    </ul>
        		</div>
        	</div>
        </nav>
        <div class="container">
