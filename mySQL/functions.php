<?php include('db.php'); ?>
<?php
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
  }
}

function deleteRows()
{
  global $connection;
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
  }
}

?>