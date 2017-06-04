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

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

            <!-- JS Confirmation Dialogue -->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-confirmation.js"></script>

            <!-- JS for DateTimePicker -->
            <!-- JS Time Parser-->
            <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>

            <!-- JS/CSS for DataTables -->
            <!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>-->
            <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">-->
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js">
            <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.2.0/js/autoFill.bootstrap4.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.2.0/js/dataTables.autoFill.min.js"></script>
            <script type="stylesheet" src="https://cdn.datatables.net/autofill/2.2.0/css/autoFill.dataTables.min.css"></script>


            <!-- Jquery UI Style -->
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">

            <!-- Font Awesome -->
            <script src="https://use.fontawesome.com/25b079534d.js"></script>

            <!-- Custom CSS -->
            <!--<link rel="stylesheet" href="<?php //echo base_url(); ?>css/style.css">-->

            <!-- Init of the Date Parser-->
            <script type="text/javascript">
                moment().format();
            </script>

        </head>
        <body>

            <nav class="navbar navbar-inverse bg-primary">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">LOGI</a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Vehicles
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>vehicles">List</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>vehicles/edit">Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>vehicles/create">Create</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Equipment
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>equipment">List</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>equipment/edit">Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>equipment/create">Create</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>equipment-groups">Groups</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>equipment-groups/edit">Edit Groups</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>equipment-groups/create">Create Group</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Issues
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>isssues">List</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>issues/edit">Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>issues/create">Create</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Locations
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>locations">List</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>locations/edit">Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>locations/create">Create</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav">
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
            </nav>