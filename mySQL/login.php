<?php include('db.php') ?>
<?php include('functions.php')     ?>
<?php createRows()     ?>
<?php include "includes/header.php" ?>

<div class='container'>
  <div class='col-sm-6'></div>
  <h1 class='text-center'>Create </h1>
  <form action='login.php' method='post'>
    <div class='form-group'>
      <label for='username'>Username</label>
      <input name='username' id='username' type='text' class='form-control' />
    </div>
    <div class='form-group'>
      <label for='password'>Password</label>
      <input name='password' type='password' class='form-control' />
    </div>
    <input type='submit' name='submit' value='Create' class="btn btn-primary mb-3" />
  </form>

</div>

<?php include 'includes/footer.php'     ?>