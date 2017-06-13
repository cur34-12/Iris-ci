<!DOCTYPE html>
<html>
<head>
    <!--Setup the responsive viewport stuff-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($title) ? $title : 'Logi' ; ?></title>

    <!--CSS for Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" /
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.css" />

    <!-- Jquery UI Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/components/jqueryui/themes/base/jquery-ui.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DataTables Styles -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/cr-1.3.3/r-2.1.1/sc-1.4.2/se-1.2.2/datatables.min.css"/>

    <!-- Full Calendar Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/fullcalendar/fullcalendar/src/main.css"/>

    <!-- JQuery / UI -->
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/components/jquery/jquery.js"></script>

    <!-- Sidebar CSS -->
    <link rel="stylesheet" type="text/css" href="/css/sidebar-style.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>