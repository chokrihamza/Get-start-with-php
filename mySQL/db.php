<?php
   
$connection=mysqli_connect('localhost','root','','loginapp');//retun true or false
         if($connection){
               echo 'We are connected';
               
         }else{
               die('Database connection failed');
               
         }
?>