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
         $number=10;
        switch ($number) {
              case 34:
                  echo "the value is 34";
                  break;
               case 33:
                  echo "the value is 33";
                  break;
               case 30:
                  echo "the value is 30";
                  break;
               default:
                  echo 'not found';
                  break;
        }
      ?>
      </body>

</html>