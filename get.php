<?php
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>


  <body>
    <?php $id = "10";
  $click = "Click here";
  ?>
    <a href="get.php?id=<?php echo $id ?>"><?php echo $click ?></a>
  </body>

</html>