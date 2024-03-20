<?php
session_start();
  require 'database/dbconnect.php';
  
if(isset($_SESSION['login']) && $_SESSION['login'] == true)
{
    $login = true;
}
else
{
    $login = false;
}  
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
   <body class="main-layout special-page">
      <!-- loader  -->
     <!--  <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->
      <?php require 'header.php'; ?>
      <!-- end loader -->
     
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                           <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner1.png" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 50% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                           <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>
                        
                     </div>
                  </div>
               </div>
               
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="feedback.php" method="post" class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="email" name="email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" maxlength="10" placeholder="Phone" type="number" name="phone">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button type="submit" name="submit" class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

      <!-- footer -->
      <?php include 'footer.php'; ?>
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
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
 
   if (isset($_POST['submit'])) 
   {
      if ($login == true) {
         if ($_SESSION['user'] == $name)
          {
            if ($name == !"" && $email == !"" && $phone == !"" && $message == !"") 
            {
               $query_insert = "INSERT INTO `feedback` (`username`, `email`, `phone`, `message`, `date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp());";
               $run_query = mysqli_query($conn, $query_insert);
              echo "<script>alert('Your Feedback is Sending')</script>";
            }
            else
          {
              echo "<script>alert('Your Data is Empty || Enter Your FeedBack')</script>";
          }
       }
        else
         {
              echo "<script>alert('Your Username is Not Exist Check Your Usename')</script>";
         }
     }
      else 
      {
         echo "<script>alert('You are not login || to login in website')</script>";
         //echo"<a href='/project/login.php'>Click Login</a>";
     }
   }
 }
?>