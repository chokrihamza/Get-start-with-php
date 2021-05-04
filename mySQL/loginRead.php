<?php
// @connect to the data base 
    $connection=mysqli_connect('localhost','root','','loginapp');//retun true or false
         if($connection){
               echo 'We are connected';
               
         }else{
               die('Database connection failed');
               
         }
    //@create a query
      $query = "SELECT * FROM users";
     
      $result = mysqli_query($connection, $query);
      if (!$result) {
            die('QUERY FAILED' . mysqli_error());
            
      }
   
        
   
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
  </head>

  <body>
    <div class='container'>
      <div class='col-sm-6 bg-warning'>
        <?php
         while($row=mysqli_fetch_assoc($result)){?>
        <pre>
          <?php
             print_r($row);
          ?>
           </pre>
        <?php
         }
        ?>

      </div>
    </div>

  </body>

</html>