<!DOCTYPE html>
<html lang="en">

      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
      </head>

      <body>
            <?php
 function saySomthing($name){
      echo '<h1>'.'hi '.$name;
       
 }

 saySomthing('hamza');
 saySomthing('sami');
 saySomthing('alex');
 echo '<br/>';
 function addNumbers($n1,$n2){
       $sum=$n1+$n2;
       return $sum;
 }
 $result=addNumbers(10,20);
 echo addNumbers($result,10)
 ?>
      </body>

</html>