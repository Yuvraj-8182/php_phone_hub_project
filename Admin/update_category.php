<!--*****Categries Update form*****----------------------------------------------------------------->
<?php
$size = false;
if (isset($_GET['c_id'])) {
  $c_id = $_GET['c_id'];
  require 'database/_dbconnect.php';
  $query = "SELECT * FROM categries WHERE id=$c_id";
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


            

                <form action="" method="post" enctype="multipart/form-data">
      <!--<div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Id</label>
        <input type="text" class="form-control" name="c_id" id="c_id" value="<?php echo $row['id']; ?>">
      </div>-->
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">category</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
        <input type="file" class="form-control" accevapt="image/png,image/jpeg" name="new_image" id="new_image" value=''>
         <input type="hidden" name="old_image" id="" lue="<?php 
                                                                echo $row['image'];

                                                            ?>">
          <!-- <input type="submit" name="upload" value="Upload"> -->
        <img src="<?php if (isset($_FILES['cat_image'])) {
                    echo "hello";
                  } else {
                    echo $row['image'];
                  } ?>" width="100px" height="100px" alt="" srcset="" name="c_img">
      </div>
      <div class="md-3">
        <input type="submit" id="c_update" name="c_update" value="Update" class="btn btn-success">
        <a href="category.php"><input type="button" id="" name="go_back" value="<- Go Back" class="btn btn-success"></a>
         <p><?php if($size == true){echo "only png and jpg file uplaod || file size 2,504,943(small or equal not bigger) byte enter";}?></p>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // form variables
  
  $name = $_POST['name'];
  $old_image = $_POST['old_image'];
  $new_image = $_FILES['new_image']['name'];
  $image_type = $_FILES['new_image']['type'];
  $image_size = $_FILES['new_image']['size'];
  // $c_image = $_POST['c_img'];
  $c_image_tmp = $_FILES['new_image']['tmp_name'];
  $c_image_folder = "img_Upload/$c_id";

  // submit data(submit button)

  if (isset($_POST['c_update'])) {

    // new image and old image(new is empty than old image path send database table)
    
    if($new_image != '')
     {
       $update_file = '/phone hub/images/'.$_FILES['new_image']['name'];
     }
     else
     {
       $update_file = $old_image;
     }
     
        $update_c = "UPDATE `categries` SET `name` = '$name', `image` = '$update_file', `date` = current_timestamp() WHERE `id` = $c_id";
           
        
        // update query run
        
        if ($update_c && ($image_size <=2504943) ) { 

          $run_update_c = mysqli_query($conn, $update_c);
          move_uploaded_file($c_image_tmp,$c_image_folder.$new_image);
          ?>
          
          <script>window.location.href="category.php";</script>
          <?php
        } else {
          $size = true;
          echo "<script>alert('update not successfully')</script>";
        }
     }





    }

    // echo "<script>alert('only png and jpg file uplaod || file size 2,504,943(small or equal not bigger) byte enter')</script>";
  


  ?>
