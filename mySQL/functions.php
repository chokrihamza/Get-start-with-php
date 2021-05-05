<?php include('db.php'); ?>
<?php
function createRows()
{
  global $connection;
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(name,password)";
    $query .= "VALUES('$username','$password')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('QUERY FAILED' . mysqli_error($connection));
    } else {
      echo '<h2 class="bg-success">Record created <3 </h2>';
    }
  }
}

function readRows()
{
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('QUERY FAILED' . mysqli_error($connection));
  }

  while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
  }
}


function showAllData()
{
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('QUERY FAILED' . mysqli_error($connection));
  }

  while ($row = mysqli_fetch_assoc($result)) {

    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
  }
}

function updateTable()
{
    global $connection;
  if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        //prepare the query
        $query = "UPDATE users SET ";
        $query .= "name='$username', ";
        $query .= "password='$password' ";
        $query .= "WHERE id=$id ";
        // create interation to get reslut
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query faild" . mysqli_error($connection));
    } else {
      echo '<h2 class="bg-success">Record updated <3 </h2>';
    }
    }
}

function deleteRows()
{
    global $connection;
  if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        //prepare the query
        $query = "DELETE FROM users ";
        $query .= "WHERE id=$id ";
        // create interation to get reslut
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query faild" . mysqli_error($connection));
    } else {
      echo '<h2 class="bg-success">Record deleted <3 </h2>';
    }
  }
}




?>