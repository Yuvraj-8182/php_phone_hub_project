<?php
  require 'database/_dbconnect.php';
 

  // categriey data delete

  if(isset($_GET['c_id']))
  {
    $c_id = $_GET['c_id'];
    $delete_c = "DELETE FROM categries WHERE id = $c_id";
    $run_delete_c = mysqli_query($conn, $delete_c);
    // $location = 'index.php';
    if($run_delete_c)
    {
      echo "<script>alert('Data Delete')</script>";
       header('location:category.php');
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