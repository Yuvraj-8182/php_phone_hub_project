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
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="category.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Category</span>
                </a></li>
                <li><a href="product.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">product</span>
                </a></li>
                <li><a href="mainuser.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">User Manage</span>
                </a></li>
                <li><a href="order.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Order</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">About us</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

     <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

		
		<script src="script.js"></script>
</body>
</html>





















