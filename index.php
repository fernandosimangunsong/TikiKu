
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Aplikasi Tikiku</title>
    
    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet">
    <link href="css/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="css/chosen.min.css" rel="stylesheet">
    <link href="css/colorbox.css" rel="stylesheet">
    <link href="css/responsive-tables.css" rel="stylesheet">
    <link href="css/bootstrap-tour.min.css" rel="stylesheet">
    <link href="css/jquery.noty.css" rel="stylesheet">
    <link href="css/noty_theme_default.css" rel="stylesheet">
    <link href="css/elfinder.min.css" rel="stylesheet">
    <link href="css/elfinder.theme.css" rel="stylesheet">
    <link href="css/jquery.iphone.toggle.css" rel="stylesheet">
    <link href="css/uploadify.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>

<?php include "template/header.php" ?>
<?php include "template/menu.php" ?>
            

                
    <div class="ch-container">
        <div class="row">
            <div id="content" class="col-lg-10 col-sm-10">
                <!-- content starts -->
                

                            <?php

                                include "controller/MenuController.php";
                                $menu = new MenuController();
                                if(isset($_GET['formTrack'])){ 
                                    $menu->viewFormtrackingPengiriman();
                                }
                                else if(isset($_GET['aboutUs'])){ 
                                    $menu->tampilAboutUs();
                                }
                                else{
                                    $menu->tammpilDashboard();   
                                }

                            ?>
                <!--/fluid-row-->

            </div>
            <!--/.fluid-container-->
            
            
            
            <!-- external javascript -->

            <script src="js/bootstrap.min.js"></script>

            <!-- library for cookie management -->
            <script src="js/jquery.cookie.js"></script>
            <!-- calender plugin -->
            <script src="js/moment.min.js"></script>
            <script src="js/fullcalendar.min.js"></script>
            <!-- data table plugin -->
            <script src="js/jquery.dataTables.min.js"></script>

            <!-- select or dropdown enhancer -->
            <script src="js/chosen.jquery.min.js"></script>
            <!-- plugin for gallery image view -->
            <script src="js/jquery.colorbox-min.js"></script>
            <!-- notification plugin -->
            <script src="js/jquery.noty.js"></script>
            <!-- library for making tables responsive -->
            <script src="js/responsive-tables.js"></script>
            <!-- tour plugin -->
            <script src="/js/bootstrap-tour.min.js"></script>
            <!-- star rating plugin -->
            <script src="js/jquery.raty.min.js"></script>
            <!-- for iOS style toggle switch -->
            <script src="js/jquery.iphone.toggle.js"></script>
            <!-- autogrowing textarea plugin -->
            <script src="js/jquery.autogrow-textarea.js"></script>
            <!-- multiple file upload plugin -->
            <script src="js/jquery.uploadify-3.1.min.js"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src="js/jquery.history.js"></script>
            <!-- application script for Charisma demo -->
            <script src="js/charisma.js"></script>


</body>

</html>