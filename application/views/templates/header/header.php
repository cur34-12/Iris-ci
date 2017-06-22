<!DOCTYPE html>
<html>
<head>
    <!--Setup the responsive viewport stuff-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($title) ? $title : 'Iris' ; ?></title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- MaterializeCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Jquery UI Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/components/jqueryui/themes/base/jquery-ui.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/components/font-awesome/css/font-awesome.css">

    <!-- DataTables Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/datatables/datatables/media/css/dataTables.material.css"/>

    <!-- Full Calendar Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/fullcalendar/fullcalendar/dist/fullcalendar.css"/>

    <!-- JQuery / UI -->
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/components/jquery/jquery.js"></script>

    <!-- Typekit -->
    <script src="https://use.typekit.net/kde8jqk.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
</head>
<body>
<header class="wrapper-sidebar">
        <nav id="slide-out" class="top-nav">
            <div class="container">
                <div class="nav-wrapper"><a class="page-title"><?php echo isset($title) ? $title : 'Iris' ; ?></a></div>
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
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>">Home</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>about">About</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>calendar">Calendar</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect waves-teal">Equipment</a>
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
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>vehicles">Vehicles</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>members">Members</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>locations">locations</a></li>
        </ul>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m9 l10">