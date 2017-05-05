<?php
// include 'config.php'; 

// if(isset($_SESSION['username'])== 0) {  Halaman ini tidak dapat diakses jika belum ada yang login 
// 	header('Location: login.php'); 
// }

?>


<html lang="en">
<head>
   
    <meta charset="utf-8">
    <title>Aplikasi Tikiku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="assets/css/charisma-app.css" rel="stylesheet">
    <link href="assets/css/fullcalendar.css" rel="stylesheet">
    <link href="assets/css/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="assets/css/chosen.min.css" rel="stylesheet">
    <link href="assets/css/colorbox.css" rel="stylesheet">
    <link href="assets/css/responsive-tables.css" rel="stylesheet">
    <link href="assets/css/bootstrap-tour.min.css" rel="stylesheet">
    <link href="assets/css/jquery.noty.css" rel="stylesheet">
    <link href="assets/css/noty_theme_default.css" rel="stylesheet">
    <link href="assets/css/elfinder.min.css" rel="stylesheet">
    <link href="assets/css/elfinder.theme.css" rel="stylesheet">
    <link href="assets/css/jquery.iphone.toggle.css" rel="stylesheet">
    <link href="assets/css/uploadify.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- The fav icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            
            <a class="navbar-brand" href="index1.php" length="20"> <img alt="Charisma Logo" src="assets/img/logo20.png" class="hidden-xs"/> Tikiku</a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">                    
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>        
            <!-- user dropdown ends -->
        </div>
    </div>
    
    <!-- topbar ends -->
<h5><font color="#000099"> ::::::: Selamat Datang, <!-- <?php echo $_SESSION['username']; ?> --> ::::::: </font></h5>
<h5><font color="#000099"> :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: </font></h5>
<br>        
<!-- external javascript -->

<script src="assets/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="assets/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<!-- data table plugin -->
<script src="assets/js/jquery.dataTables.min.js"></script>

<!-- select or dropdown enhancer -->
<script src="assets/js/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="assets/js/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="assets/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="assets/js/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="assets//js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="assets/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="assets/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="assets/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="assets/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="assets/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="assets/js/charisma.js"></script>


</body>
</html>