<?php
   if(isset($_POST['submit'])){
         $username=$_POST['username'];
         $password=$_POST['password'];
         // connect to the database 
         $connection=mysqli_connect('localhost','root','','loginapp');//retun true or false
         if($connection){
               echo 'We are connected';
         }else{
               die('Database connection failed');
         }
        /* if($username&& $password){
            echo $username;
            echo '<br/>';
            echo $password;
         }else{
               echo 'thsi field cannot be blank';
         }*/
        
         
   }
?>

<!DOCTYPE html>
<html lang="en">

      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
                  crossorigin="anonymous">
            <title>Document</title>
      </head>

      <body>
            <div class='container'>
                  <div class='col-sm-3'></div>
                  <form action='login.php' method='post'>
                        <div class='form-group'>
                              <label for='username'>Username</label>
                              <input name='username' id='username' type='text' class='form-control' />
                        </div>
                        <div class='form-group'>
                              <label for='password'>Password</label>
                              <input name='password' type='password' class='form-control' />
                        </div>
                        <input type='submit' name='submit' value='Send' class="btn btn-primary mb-3" />
                  </form>

            </div>

      </body>

</html>