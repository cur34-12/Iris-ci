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
            <!--<script type="text/javascript" src="<?php // echo base_url(); ?>js/bootstrap.js"></script>-->

            <!-- Bootstrap Theme -->
            <!--<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.css">-->

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

            <!-- JS Confirmation Dialogue -->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-confirmation.js"></script>

            <!-- JS for DateTimePicker -->
            <!-- JS Time Parser-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

            <!-- JS for DataTables -->
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>

            <!-- DataTables Style -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">


            <!-- JS for DataTables -->
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

            <!-- Jquery UI Style -->
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">

            <!-- Font Awesome -->
            <script src="https://use.fontawesome.com/25b079534d.js"></script>

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
        		<div class="navbar-header">
        			<a class="navbar-brand" href="<?php echo base_url(); ?>">LOGI</a>
        		</div>
        		<div id="navbar">
        			<ul class="nav navbar-nav">
        				<li><a href="<?php echo base_url(); ?>">Home</a></li>
        				<li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li class="dropdown">
                                <a href="<?php echo base_url(); ?>vehicles" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehicles<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>vehicles">List</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>vehicles/edit">Edit</a></li>
                                    <li><a href="<?php echo base_url(); ?>vehicles/create">Create</a></li>
                                    <li><a href="<?php echo base_url(); ?>vehicles/delete">Delete</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="<?php echo base_url(); ?>equipment" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipment<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>equipment">List</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/edit">Edit</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/create">Create</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment/delete">Delete</a></li>
                                </ul>
                        </li>  
                        <li class="dropdown">
                                <a href="<?php echo base_url(); ?>equipment-groups" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Equipment Groups<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>equipment-groups">List</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>equipment-groups/edit">Edit</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment-groups/create">Create</a></li>
                                    <li><a href="<?php echo base_url(); ?>equipment-groups/delete">Delete</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                                <a href="<?php echo base_url(); ?>issues" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Issues<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>issues">List</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url(); ?>issues/edit">Edit</a></li>
                                    <li><a href="<?php echo base_url(); ?>issues/create">Create</a></li>
                                    <li><a href="<?php echo base_url(); ?>issues/delete">Delete</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo base_url(); ?>locations" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locations<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>locations">List</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>locations/edit">Edit</a></li>
                                <li><a href="<?php echo base_url(); ?>locations/create">Create</a></li>
                                <li><a href="<?php echo base_url(); ?>locations/delete">Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </form>
                        <?php if ($this->ion_auth->logged_in()): ?>   
                            <li><?php echo anchor( site_url('profile'), $this->ion_auth->user()->row()->username); ?></li>
                            <li><?php echo anchor( site_url('profile/logout'),'Logout'); ?></li> 
                        <?php elseif (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()): ?>  
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a>
                            <div class="dropdown-menu" style="width:250px;">
                            <form action="http://logi.dev1.strat.is/profile/login" class="form container-fluid" id="form_signin" name="form_signin" role="form" method="post" accept-charset="utf-8">
                                <div class="input-group margin-bottom-sm">
                                    <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="login_username" id="login_username" placeholder="Username/Email" required="" autofocus="" />
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password" required="" autofocus="" /> 
                                </div>
                                <input type="submit" name="login_submit" value="Login" class="btn btn-block">
                                <div class="checkbox"><label><input type="checkbox" name="remember" value="1"  id="remember" />Remember Me</div>
                                    <a href="http://logi.dev1.strat.is/register">Register</a> 
                                </label>        
                                <label class="checkbox"> 
                                    <a href="http://logi.dev1.strat.is/profile/forgot_login">Forgot Password</a> 
                                </label>
                            </form>     
                            </div>
                            </li>
                        <?php endif ?>  
                    </ul>
        		</div>
        	</div>
        </nav>