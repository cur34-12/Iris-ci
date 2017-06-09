<div id="wrapper">
    <div class="overlay"></div>
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="<?php echo base_url(); ?>">
                    LOGI
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>about">About</a>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipment <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>equipment">List</a></li>
                    <li><a href="<?php echo base_url(); ?>equipment/create">Create</a></li>
                    <li class="dropdown-header">Equipment Groups</li>
                    <li><a href="<?php echo base_url(); ?>equipment-groups">List</a></li>
                    <li><a href="<?php echo base_url(); ?>equipment-groups/create">Create</a></li>
                    <li class="dropdown-header">Issues</li>
                    <li><a href="<?php echo base_url(); ?>issues">List</a></li>
                    <li><a href="<?php echo base_url(); ?>issues/create">Create</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fleet <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>vehicles">List</a></li>
                    <li><a href="<?php echo base_url(); ?>vehicles/create">Create</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Locations <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>locations">List</a></li>
                    <li><a href="<?php echo base_url(); ?>locations/create">Create</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Admin</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>members">Members</a></li>
                    <li><a href="<?php echo base_url(); ?>suppliers">Suppliers</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->