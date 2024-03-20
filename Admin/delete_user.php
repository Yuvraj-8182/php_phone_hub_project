<?php
  require 'database/_dbconnect.php';
  // user table data delete
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $delete = "DELETE FROM users WHERE id = $id";
    $run_delete = mysqli_query($conn, $delete);
    // $location = 'index.php';
    if($run_delete)
    {
      echo "<script>alert('Data Delete')</script>";
       header('location:mainuser.php');
    }
    else
    {
      echo"record not deleted";
    }
  }
  else
  {
    echo "id not set";
  }
  ?>