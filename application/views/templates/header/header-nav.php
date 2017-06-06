<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url(); ?>">LOGI</a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
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
                    <div class="dropdown-divider"></div>
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
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>equipment/edit">Edit</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>equipment/create">Create</a>
                    <div class="dropdown-divider"></div>
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
                    <a class="dropdown-item" href="<?php echo base_url(); ?>issues">List</a>
                    <div class="dropdown-divider"></div>
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
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>locations/edit">Edit</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>locations/create">Create</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>members">Members</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>suppliers">Suppliers</a>
                </div>
            </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
            <?php if ($this->ion_auth->logged_in()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>profile"><?php echo $this->ion_auth->user()->row()->username; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>profile/logout">Logout</a>
                </li>
            <?php elseif (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login <span class="glyphicon glyphicon-log-in"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="width:250px;">
                        <form action="<?php echo base_url(); ?>profile/login" class="form container-fluid" id="form_signin" name="form_signin" role="form" method="post" accept-charset="utf-8">
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="login_username" id="login_username" placeholder="Username/Email" required="" autofocus="" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password" required="" autofocus="" />
                            </div>
                            <input type="submit" name="login_submit" value="Login" class="btn btn-block">
                            <div class="checkbox"> 
                                <label>
                                    <input type="checkbox" name="remember" value="1"  id="remember" />
                                    Remember Me
                                </label>
                            </div>
                            <a href="<?php echo base_url(); ?>register">Register</a>
                            <label class="checkbox">
                                <a href="<?php echo base_url(); ?>profile/forgot_login">Forgot Password</a>
                            </label>
                        </form>
                    </div>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>