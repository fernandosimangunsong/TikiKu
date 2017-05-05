<?php
   
    
    
    class MenuController{
        
        
        
        function __construct(){
            
        }
        
        function tampilAboutUs(){
            include "view/aboutUs.php"; 
        }   

        function tammpilDashboard(){
            include "view/dashboard.php"; 
        }

        function viewFormTrackingPengiriman(){
            include "view/trackingPengiriman.php"; 
        }


        function __destruct(){
        }
    }
?>