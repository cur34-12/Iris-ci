<!DOCTYPE html>
<html>
    <head>
        <!--Setup the responsive viewport stuff-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo isset($title) ? $title : 'Logi' ; ?></title>

        <!-- JQuery / UI -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

        <!--JS/CSS for Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>/js/tether.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/bootstrap.js"></script>

        <!-- JS Time Parser-->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>

        <!-- JS/CSS for chart.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>

        <!-- Jquery UI Style -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Init of the Date Parser-->
        <script type="text/javascript">
            moment().format();
        </script>
    </head>
    <body>