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
       $table=array(200,300,400,500,600,700,800,900,1000);
         foreach ($table as $value) {
               echo '<h1>'.$value;
         }
      ?>
      </body>

</html>