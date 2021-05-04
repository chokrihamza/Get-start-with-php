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
      $list = [10, 10, 400, 51, 36, 845];
      echo max($list);
      echo '<br/>';
      $l = array_chunk($list, 2);
      print_r($l);
      echo '<br/>';
      print_r(array_count_values($list));
      echo '<br/>';
      print_r(sort($list));
      echo '<br/>';
      print_r($list);
      echo '<br/>';
      echo count($list);
      var_dump($list);



      ?>
      </body>

</html>