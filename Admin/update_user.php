<?php
require 'database/_dbconnect.php';


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // $update = "UPDATE `users` SET `username` = 'pz' WHERE `id` = 21;";
  $query = "SELECT * FROM users WHERE id=$id";
  $run = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($run)) {

?>
    


  



<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<?php require 'header.php'; ?>


<div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Add Category</span>
                </div>


            

               <!-- from -->
      <form action="" method="post">
        <div class="mb-2">
          <label for="exampleFormControlInput1" class="form-label">Id</label>
          <input type="text" class="form-control" name="id" id="id" value="<?php echo $row['id']; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['fullname']; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Email</label>
          <input type="text" class="form-control" name="emai" id="eamil" value="<?php echo $row['email']; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Phone No</label>
          <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $row['phone']; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Username</label>
          <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['username']; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="password" value="<?php echo $row['password']; ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Date/Time</label>
          <input type="text" class="form-control" name="date" id="date" value="<?php echo $row['date']; ?>">
        </div>
        <div class="md-3">
          <input type="submit" id="update" name="update" value="Update" class="btn btn-success">
        </div>
        </from>


    
</body>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

<?php
    //  while
  }
  //  if
}
if (isset($_POST['update'])) {
  $fullname = $_POST['fname'];
  $username = $_POST['name'];
  $password = $_POST['password'];

  $update_query = "UPDATE `users` SET `fname` = '$fullname', `username` = '$username', `password` = '$password' WHERE `id` ='$id'";

  $update_run = mysqli_query($conn, $update_query);

  if ($update_run) {
    ?>
          
    <script>window.location.href="mainuser.php";</script>
    <?php
    // echo "<script>alert('Data Update')</script>";
  } else {
    echo "no data update";
  }
}
?>
