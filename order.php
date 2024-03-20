<?php
session_start();
require 'database/dbconnect.php';

require 'component.php';

require 'get_data.php';
require 'header.php';



if(isset($_SESSION['login']) && $_SESSION['login'] == true)
{
    $login = true;
    $user=$_SESSION['user'];
    $select = "SELECT * FROM `users` Where username='$user'"; 
    $run=mysqli_query($conn,$select);
    $query_run=mysqli_fetch_assoc($run);

    $u_id=$query_run["id"];
    // echo $user;


?>


<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    
    
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Order</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brand -->
    <div class="brand">
        <div class="container">

        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">

                    <?php
                       
                     $select = "SELECT * FROM `phone_payment` Where user_id='$u_id'";
                     $s_run=mysqli_query($conn,$select);
                    if(mysqli_num_rows($s_run))
                    {
                    while ($row = mysqli_fetch_assoc($s_run)) {
                        $p_name=$row['pro_name'];
                        $p_price=$row['pro_price'];
                        $p_img=$row['pro_image'];
                    
                    ?>
                    <div class="col-md-10 offset-md-1 border rounded mt-5 bg-white h-25">
        <img src="<?php echo $p_img; ?>" alt="" class="mx-2">
        <div class="pt-4">
            <h6>PRICE DETAILS</h6>
            <hr>
            <div class="row price-details">
                <div class="col-md-6">
                    <h6>Product Name:</h6>
                    
                    <hr>
                    <h6>Amount Payable</h6>
                </div>
                <div class="col-md-6">
                    <h6><?php echo $p_name; ?></h6>
                    <hr>
                    <h6><?php echo $p_price; ?></h6>
                </div>
            </div>
        </div>
    </div>

    <?php
     }
}
else
{ 
    echo "you are not product ordered <a href='categorys.php'>Order Now</a>";
}
 ?>

                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
else
{
    $login = false;
    ?>
    <div class="jumbotron my-2">
  <h1 class="hd1">See Orders !</h1>
  <p class="lead hd1">You Are Not Logged In Please Log-in In PhoneHub</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-dark btn-lg" href="Login.php" role="button">Log In</a>
    <a class="btn btn-dark  btn-lg" href="SignUp.php" role="button">Register</a>
  </p>
</div>
<?php 
}
?>

    <!-- end brand -->
    

    <!-- footer -->
    <?php require 'footer.php';  ?>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>