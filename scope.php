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
         $x="outside";//global scope
         function convert(){
               global $x;
              $x='inside';//local scope

         }

         echo '<h1>'.$x;
         convert();
         echo '<h1>'.$x;
         echo '<h1>'.$x;

      ?>
      </body>

</html>