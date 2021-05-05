<?php include('db.php') ?>
<?php include('functions.php') ?>

<?php include "includes/header.php" ?>
<div class='container'>
  <div class='col-sm-6 bg-warning'>
    <pre>
    <?php
    
      readRows();
    
    ?>
  </pre>
  </div>
</div>

<?php include 'includes/footer.php'     ?>