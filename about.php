<?php
session_start();
require 'database/dbconnect.php';

require 'component.php';

require 'get_data.php';

$select = mysqli_query($conn, "SELECT * FROM about");
$about_data = mysqli_fetch_array($select);

// if(isset($_SESSION['login']) && $_SESSION['login'] == true)
// {
//     $login = true;
    
// }
// else
// {
//     $login = false;
// }
?>


<body class="main-layout">
    <!-- loader  -->
   <!--  <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <!-- end loader -->
    <!-- header -->
    <?php require 'header.php';  ?>
    <!-- end header -->


    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>About</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="<?php echo $about_data["a_img"]?>" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <span><?php echo $about_data["a_title"]?></span>
                        <p> <?php echo $about_data["a_dec"]?></p>
                    </div>
                </d
                iv>
            </div>
        </div>
    </div>
    </div>
    <!-- end about -->

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