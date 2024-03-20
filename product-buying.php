<?php
session_start();
// database folder
require 'database/dbconnect.php';

//product showing function call(get_data file)
require_once('get_data.php');

//user login true or false checke
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $loggedin = true;
    $uname = $_SESSION['user'];
} else {
    $loggedin = false;
}

//   product id get on image through
$product = $_GET['id'];
// echo $product;
$item_p = getData();
foreach ($item_p as $p) :
    if ($p['id'] == $product) :
        $name =  $p['p_name'];
        $price = $p['p_price'];
        $image = $p['p_image'];
    endif;
endforeach;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>phone hub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <?php require 'header.php';  ?>
    <!-- end loader -->

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Payment</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-5 offset-md-1 border rounded mt-5 bg-white h-25">
        <img src="<?php echo $image; ?>" alt="" class="mx-2">
        <div class="pt-4">
            <h6>PRICE DETAILS</h6>
            <hr>
            <div class="row price-details">
                <div class="col-md-6">
                    <h6>Product Name:</h6>
                    <h6>Delivery Charges</h6>
                    <hr>
                    <h6>Amount Payable</h6>
                </div>
                <div class="col-md-6">
                    <h6><?php echo $name; ?></h6>
                    <h6 class="text-success">FREE</h6>
                    <hr>
                    <h6><?php echo $price; ?></h6>
                </div>
            </div>
        </div>
    </div>



    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" action="" method="post">
                        <div>
                            <input type="hidden" name="p_name" id="p_name" value="<?php echo $name; ?>">
                            <input type="hidden" name="p_price" id="p_price" value="<?php echo $price; ?>">
                            <input type="hidden" name="p_image" id="p_image" value="<?php echo $image; ?>">
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="FullName" type="text" name="name" require>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="mobile no" type="text" name="number" require>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="pincode" type="text" name="pin" require>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Address" type="text" name="address" require>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" name="card_number" placeholder="Enter cart Number" type="number" require>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="MM/YY" type="datetime" maxlength="7" size="7px" name="card_date" require>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="cvc" type="text" maxlength="10" size="7px" name="cvc" require>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Enter Card Name" type="text" name="cardname" require>
                            </div>



                            <!-- INSERT INTO `phone_payment` (`id`, `p_id`, `user_id`, `pro_name`, `pro_image`, `pro_price`, `user_name`, `mobile_no`, `address`, `contry`, `state`, `city`, `pincode`, `date`) VALUES (NULL, '1', '1', 'oppo', '/phone hub/images/1.png', '20000', 'yuvraj8182', '7899999099', 'vankiya', '1', '2', '3', '365655', current_timestamp()); -->


                            <div class=" col-md-12">
                                <button class="send" type="submit" name="submit">Buy</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    //user 
    // echo $_POST['cardname'];
    $u_query = "SELECT id,username FROM users WHERE username='$uname'";
    $u_run = mysqli_query($conn, $u_query);
    $u_row = mysqli_fetch_assoc($u_run);
    $u_id = $u_row['id'];
    if ($u_id == $u_id)
        //  product information
        $product;
    $p_name = $_POST['p_name'];
    $p_image = $_POST['p_image'];
    $p_price = $_POST['p_price'];
    //user informatio
    $u_id;
    $name = $_POST['name'];
    $phone_number = $_POST['number'];
    $pincode = $_POST['pin'];
    $address = $_POST['address'];

    if (isset($_POST['submit'])) 
    {

        if ($loggedin == true)
         {
            if ($name == !"" && $phone_number == !"" && $pincode == !"" && $address == !"") 
            {
                $card_number = $_POST['card_number'];
                $card_name  = $_POST['cardname'];
                $card_date = $_POST['card_date'];
                $card_cvs = $_POST['cvc'];
                if ($card_number == !"" && $card_name == !"" && $card_date == !"" && $card_cvs == !"") 
                {
                    $b_query = "INSERT INTO `phone_payment` (`p_id`, `user_id`, `user_name`, `pro_name`, `pro_image`, `pro_price`, `mobile_no`, `address`, `pincode`,`card_name`,`date`) 
                       VALUES ('$product','$u_id', '$name', '$p_name', '$p_image', '$p_price', '$phone_number', '$address', '$pincode', '$card_name', current_timestamp())";
                    //   echo $b_query;
                  $b_run = mysqli_query($conn, $b_query);
                    if ($b_run)
                    {
                        echo "<script>alert('You Pay $p_price in $p_name product')</script>";
                    } 
                    else 
                    {
                        echo "<script>alert('You Payment is Fail')</script>";
                    }
                } 
                else 
                {
                    echo "<script>alert('Your Crad Details must be enter')</script>";
                }
            } 
            else 
            {
                echo "<script>alert('Your Data  Empty')</script>";
            }
        }
        else 
        {
            echo "<script>alert('Login in This website')</script>";
        }
    }
}

?>