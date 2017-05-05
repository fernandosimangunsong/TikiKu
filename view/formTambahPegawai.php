<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Aplikasi Tikiku</title>
    
    <!-- The styles -->
    <link id="bs-css" href="assets/css/bootstrap-cerulean.min.css" rel="stylesheet">

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

<?php include "template/headerAdmin.php" ?>
<?php include "template/adminMenu.php" ?>

<div class="ch-container">
        <div class="row">
            <div id="content" class="col-lg-10 col-sm-10">
                <!-- content starts -->
                

                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-inner">
                            <div class="box-header well">
                                <h2><i class="glyphicon glyphicon-info-sign"></i> Registrasi Pegawai Baru</h2>
                                
                            </div>
                            	<br>
                                <center>
								<form style="border:outset; width:600px; color:#006; background-color:#FFF" method="post">
									<h3>Form Registrasi Pegawai</h3>
                                   
										<table>
											<tr align="center">
												<td>NIP</td>
												<td>:</td>
												<td><input type="text" name="nip" size="45" /></td>
											</tr>
											<tr align="center">
												<td>Nama Pegawai</td>
												<td>:</td>
												<td><input type="text" name="nama" size="45"/></td>
											</tr>
											<tr align="center">
												<td>Alamat</td>
												<td>:</td>
												<td><input type="text" name="alamat" size="45"/></td>
											</tr>
											<tr align="center">
												<td>Password</td>
												<td>:</td>
												<td><input type="password" name="password" size="45"/></td>
											</tr>

											<tr>
												<td><br />
													<input type="submit" name="register" value="Register">
													<input type="reset" name="reset" value="Reset">
												</td>
											</tr>	
										</table>
										<br>
								</form>
								</center>
								<br>
                                    <!-- Ads end -->
                                    <?php
										if(isset($_POST['register'])){ 
											$pegawai = new PegawaiController();
											$pegawai->insertDataPegawai();

										}
									?>

                            
                        </div>
                    </div>

                    <!--/#content.col-md-0-->
                </div>
                <!--/fluid-row-->

            </div>
            <!--/.fluid-container-->
            
            
            
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
            <script src="jassets/s/jquery.iphone.toggle.js"></script>
            <!-- autogrowing textarea plugin -->
            <script src="assets/js/jquery.autogrow-textarea.js"></script>
            <!-- multiple file upload plugin -->
            <script src="assets/js/jquery.uploadify-3.1.min.js"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src="assets/js/jquery.history.js"></script>
            <!-- application script for Charisma demo -->
            <script src="assets/js/charisma.js"></script>

</html>