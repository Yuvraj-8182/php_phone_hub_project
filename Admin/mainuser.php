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
                    <span class="text">User Table</span>
                </div>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Date/Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      require 'database/_dbconnect.php';
        $query = "SELECT * FROM users";

        $run = mysqli_query($conn,$query);

        if(mysqli_num_rows($run) > 0)
        {
            while($row = mysqli_fetch_assoc($run))
            {
  
               echo " <tr>
                            <th scope='row'>".$row["id"] ."</th>
                            <td>".$row['fullname'] ."</td>
                            <td>".$row['email'] ."</td>
                            <td>".$row['phone'] ."</td>
                            <td>".$row['username'] ."</td>
                            <td>".$row['password']."</td>
                            <td>".$row['date']."</td>
                            <td><a href='update_user.php?id=".$row['id']."'><button type='button' class='btn btn-primary'>Update</button></a>
                            <a href='delete_user.php?id=".$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>
                            </td>
                     </tr>
                   ";
                }  ?>
    </table>
    </tbody>
<?php  
}
else{
    echo "empty";
}
 ?>
</body>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
