<?php


 $dbhost ="165.232.136.63:3306";
 $dbuser ="myadmin";
 $dbpassword ="RainbowKat7149!";
 $dbname ="bloom";

 $con=mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
 if(!$con){
     echo "<h1>Connect Error</h1>";
 }