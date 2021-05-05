<!-- connect to db-->
<?php include('db.php'); ?>
<!-- create query for  db-->
<?php include('functions.php'); ?>
<?php deleteRows();?>
<?php include "includes/header.php" ?>
<div class='container'>
  <div class='col-sm-3'></div>
  <form action='logindelete.php' method='post'>
    <div class='form-group'>
      <h1 class='text-center'>Delete </h1>
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
    <input type='submit' name='submit' value='Delete' class="btn btn-danger mb-3" />
  </form>

</div>

<?php include 'includes/footer.php'     ?>