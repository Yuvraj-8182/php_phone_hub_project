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
                    <span class="text">Order</span>
                </div>



   
    <div class="banner">
    <!-- <h1>Categries</h1> -->
    
    <!-- table-->

    <table class="table">
        <thead>
            <tr>
           
                <th scope="col">Id</th>
                <th scope="col">product Name</th>
                <th scope="col">product Image</th>
                <th scope="col">product Price</th>
                <th scope="col">User Name</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Address</th>
                <th scope="col">Pincode</th>
                <th scope="col">Card Name</th>
                <th scope="col">Date/Time</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            // connection folder 
            require 'database/_dbconnect.php';

            $query = "SELECT * FROM phone_payment";

            $run = mysqli_query($conn, $query);

            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
            ?>
                    <tr>
                          
                        <th scope='row'><?php echo $row["id"]; ?></th>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><img src='<?php echo $row['pro_image']; ?>' width="70px"></td>
                        <td><?php echo $row['pro_price']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['mobile_no']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['pincode']; ?></td>
                        <td><?php echo $row['card_name']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        
                       

                    </tr>
            <?php
                }
            }
            else
            {
                ?>
                   <tr>
                        <td>NO Data Found</td>
                   </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
        </div>
</body>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
