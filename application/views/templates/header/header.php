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

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/components/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/components/bootstrap/css/bootstrap-theme.css">

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
<div id="wrapper" class="toggled">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Brand
                </a>
            </li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>">Home</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>about">About</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>calendar">Calendar</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipment <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url(); ?>equipment">List</a></li>
                    <li><a href="<?php echo base_url(); ?>equipment-groups">Groups</a></li>
                    <li><a href="<?php echo base_url(); ?>issues">Issues</a></li>
                    <li><a href="<?php echo base_url(); ?>suppliers">Suppliers</a></li>
                </ul>
            </li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>vehicles">Vehicles</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>members">Members</a></li>
            <li><a class="waves-effect waves-teal" href="<?php echo base_url(); ?>locations">locations</a></li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
