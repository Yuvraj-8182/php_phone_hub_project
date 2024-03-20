<?php if(isset($_SESSION['login']) && $_SESSION['login'] == true)
{
    $login = true;
}
else
{
    $login = false;
}  


if(isset($_SESSION['login']) && $_SESSION['login'] == true)
{
if (isset($_POST['add'])) 
  {
   // print_r($_POST['c_id']);


    if (isset($_SESSION['cart'])) {
      $item_array_id = array_column($_SESSION['cart'], "c_id");

      if (in_array($_POST['c_id'], $item_array_id)) {
        echo "<script>alert('Product is already added in the cart..!')</script>";
        echo "<script>header('Location:index.php')</script>";
      } else {
        $count = count($_SESSION['cart']);
        $item_array = array('c_id' => $_POST['c_id']);

        $_SESSION['cart'][$count] = $item_array;
    
      }
    } else {
      $item_array = array('c_id' => $_POST['c_id']);

      $_SESSION['cart'][0] = $item_array;
    }
  }
}
else
{
    if (isset($_POST['add']))
    {
        echo "<script>alert('login this website ')</script>";
        
    }
}


?>
<?php include_once 'Link.php'; ?>
<body>
     <!-- loader  -->
     <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
<header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu navbar navbar-expand-lg">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="about.php">About</a> </li>
                                        <li><a href="categorys.php">Category</a></li>
                                        <li><a href="feedback.php">FeedBack</a></li>
                                        
                                        <?php if($login == true){
                                            echo '<li><a href="logout.php">Logout</a></li>';
                                        }
                                        else
                                        {
                                            echo '<li><a href="login.php">Login</a></li>';
                                        } 
                                        ?>
                                        <li><a href="order.php">Order</a></li>
                                        
                                        <li class="last">
                                            <a href="add_to_cart.php">cart
                                            <?php
                                                    if (isset($_SESSION['cart'])) {
                                                        $count = count($_SESSION['cart']);
                                                        echo "<span id='cart_count' class='text-white '>$count</span>";
                                                    } else {
                                                        echo "<span id=\"cart_count\" class=\"text-white \">(0)</span>";
                                                    }
                                                    ?>
                                            </a>
                                           
                                        </li>
                                      
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navabar-toggle-icon"></span>
                                        </button>
                                        
                                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="mr-auto"></div>
                                        <div class="navbar-nav">
                                            <!-- <a href="add_to_cart.php" class="nav-item nav-link active">
                                                <h5 class="px-5 cart">
                                                    <i class="fas fa-shopping-cart"></i>Cart
                                                     <?php
                                                    // if (isset($_SESSION['cart'])) {
                                                    //     $count = count($_SESSION['cart']);
                                                    //     echo "<span id='cart_count' class='text-warning bg-light'>$count</span>";
                                                    // } else {
                                                    //     echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                                    // }
                                                    ?> 
                                                </h5>
                                            </a> -->
                                        </div>
                                    </div>
                                        
                                </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                <li><img src="icon/call.png" />(+71)9876543109</li>
                                <li><img src="icon/email.png" />demo@gmail.com</li>
                                <li><img src="icon/loc.png" />Location</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>    
