<?php
function component($p_name,$p_price,$p_image,$p_id)
{
    $products = "
    <div class='col-xl-4 col-lg-4 col-md-4 col-sm-6 margin'>
    <form action='/phone hub/index.php' method='post'>
    <div class='brand_box'>
       <a href='/phone hub/product-buying.php?id=$p_id'><img src='$p_image' alt='img' /></a>
        <h3>$<strong class='red'>$p_price</strong></h3>
        <span>$p_name</span>
        <i><img src='images/star.png'/></i>
        <i><img src='images/star.png'/></i>
        <i><img src='images/star.png'/></i>
        <i><img src='images/star.png'/></i>
        <br>
        <button type='submit' class='btn btn-warning' name='add'><i class='fas fa-shopping-cart'></i>Add to Cart</button>
        </div>
        <input type='hidden' name='c_id' value='$p_id'>
    </form>
    </div>
    ";

    echo $products;
}
function add_cart_show($p_img,$p_name,$p_price,$p_id)
{
    $cart = "
    <form action='/phone hub/add_to_cart.php?action=remove&id=$p_id' method='post' class='cart-items'>
    <div class='border rounded'>
        <div class='row bg-white'>
            <div class='col-md-3 pl-0'>
                <img src='$p_img' alt='test' class='img-fluid'>
            </div>
            <div class='col-md-6'>
                <h5 class='pt-2'>$p_name</h5>
                <small class='text-secondary'>Sellr:</small>
                <h5 class='pt-2'>$$p_price</h5>
                <button type='submit' class='btn btn-warning'>Save for Later</button>
                <button type='submit' class='btn btn-danger mx-2' name='remove'>Remove</button>
            </div>
            <div class='col-md-3'><!--py-5-->
                <div>
                    <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-minus'></i></button>
                    <input type='text' value='1' class='form-control w-25 d-inline'>
                    <button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-plus'></i></button>
               
                </div>
               
            </div>
        </div>
    </div>
  </form>   
     
    ";
    echo $cart;
}
function get_categries($name,$image,$c_id)
{
    $cat = "
    <div class='col-xl-4 col-lg-4 col-md-4 col-sm-6 margin'>
    <div class='brand_box'>
        <a href='show_categorys.php?id=$c_id'><img src='$image' alt='img' /></a>
        <h2>$name</h2>
    </div>
    <input type='hidden' name='c_id' value='$c_id'>
</div>
    
    
    ";
    echo $cat;
}



?>