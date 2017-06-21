<body>
<header>
    <nav class="top-nav">
        <div class="container">
            <div class="nav-wrapper"><a class="page-title">SideNav</a></div>
        </div>
    </nav>
    <div class="container"><a href="#" data-activates="nav-mobile"
                              class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
    </div>
    <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="/" class="brand-logo">
                <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg">Your browser does not
                    support SVG
                </object>
            </a></li>
        <li class="search">
            <div class="search-wrapper card">
                <input id="search"><i class="material-icons">search</i>
                <div class="search-results"></div>
            </div>
        </li>
        <li ><a class="waves-effect waves-teal href="<?php echo base_url(); ?>" >Home</a></li>
        <li><a class="waves-effect waves-teal href="<?php echo base_url(); ?>about">About</a></li>
        <li><a class="waves-effect waves-teal href="<?php echo base_url(); ?>calendar">Calendar</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header  waves-effect waves-teal">Equipment</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>equipment">List</a></li>
                            <li><a href="<?php echo base_url(); ?>equipment-groups">Groups</a></li>
                            <li><a href="<?php echo base_url(); ?>issues">Issues</a></li>
                            <li><a href="<?php echo base_url(); ?>suppliers">Suppliers</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li><a class="waves-effect waves-teal href="<?php echo base_url(); ?>vehicles">Vehicles</a></li>
        <li><a class="waves-effect waves-teal href="<?php echo base_url(); ?>members">Members</a></li>
        <li><a class="waves-effect waves-teal href="<?php echo base_url(); ?>locations">locations</a></li>
    </ul>