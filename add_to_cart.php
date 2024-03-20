<?php
  
  session_start();

  //$_SESSION['username'];

  require_once('database/dbconnect.php');

  require_once('component.php');

   require('get_data.php');

   if(isset($_POST['remove']))
   {
       if($_GET['action'] == 'remove')
       {
           foreach($_SESSION['cart'] as $key=>$value)
           {
              if($value["c_id"] == $_GET['id'])
              {
                  unset($_SESSION['cart'][$key]);
                  echo "<script>confirm('Are Your Sur remove this product')</script>";
                  echo "<script>header('location:add_to_cart.php')</script>";
              }
           }
       // }
   }


?>
<body class="bg-light">
<!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div> -->
    <?php include 'header.php'; 
    ?>
 
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>My Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-12 mt-5">
                <div class="shopping-cart">
                    

                    <?php 
                      $total = 0;
                      if(isset($_SESSION['cart']))
                      {
                           $p_id = array_column($_SESSION['cart'], "c_id");
                            //print_r($_SESSION['cart']);
                           $result = getData();
                          while($row = mysqli_fetch_assoc($result))
                          {
                              foreach($p_id as $id)
                              {
                                  
                                  if($row['id'] == $id)
                                  {
                                       add_cart_show($row['p_image'], $row['p_name'], $row['p_price'],$row['id']);
                                        $total = $total+(int)$row['p_price'];
                                  }
                              }
                          }
                      }
                      else
                      {
                          echo"<h5>Cart is Empty</h5>";
                      }

                    ?>
                    
                </div>
            </div>
            <div class="col-md-10 offset-md-1 border rounded mt-5 bg-white h-25">
               <div class="pt-4">
                   <h6 style="text-align: center;" >PRICE DETAILS</h6>
                   <hr>
                   <div class="row price-details">
                       <div class="col-md-6">
                           <?php
                             if(isset($_SESSION['cart']))
                             {
                                $count = count($_SESSION['cart']);
                                echo "<h6>Price($count items)</h6>";
                             }
                             else
                             {
                                echo "<h6>Price(0 items)</h6>";
                             }
                           ?>
                           <h6>Delivery Charges</h6>
                           <hr>
                           <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6><?php echo "$".$total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6>$<?php
                             echo $total;
                             ?></h6>
                              <button type='submit' class='btn btn-warning' name='add'><i class='fas fa-shopping-cart'></i><a href="product-buying.php">Buy</a></button>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
 <div style="margin-bottom: 20px;">
	
	</div>

    <!-- footer -->
    <?php require 'footer.php';  ?>
    <!-- end footer -->
</body>
    <!--bootstrap js-->
<script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</html>