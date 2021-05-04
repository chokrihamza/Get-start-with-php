<!-- connect to db-->
<?php  include('db.php');?>
<!-- create query for  db-->
<?php  include('functions.php');?>
<?php
   if(isset($_POST['submit'])){
     updateTable();
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
      <div class='col-sm-3'></div>
      <form action='loginUpdate.php' method='post'>
        <div class='form-group'>
          <label for='username'>Username</label>
          <input name='username' id='username' type='text' class='form-control' />
        </div>
        <div class='form-group'>
          <label for='password'>Password</label>
          <input name='password' type='password' class='form-control' />
        </div>
        <div class='form-group'>
          <label for='ID'>ID</label>
          <select name='id' id=''>
            <?php
            showAllData();
          ?>

          </select>

        </div>
        <input type='submit' name='submit' value='Update' class="btn btn-primary mb-3" />
      </form>

    </div>

  </body>

</html>