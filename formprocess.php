<?php
   if(isset($_POST['submit'])){
         $name=array('sami','ali','jhon','alin','alex','sonny');
         $minimum=3;
         $maximum=10;
     $username=$_POST['username'];
     $userpassword= $_POST['password'];
     if(strlen($username)<$minimum){
           echo 'user name must be longer than 5 characters';
           
     }
     if(strlen($username)>$maximum){
      echo 'user name cannot be longer than 10 characters';
     }
     if(!in_array($username,$name)){
      echo 'Sorry you are not allowed';
     }else{
           echo 'Welcome';
     }
     
   }
  
?>