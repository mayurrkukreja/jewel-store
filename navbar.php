<head>
      <!-- gLightbox gallery-->
  <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Swiper slider-->
  <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
  <!-- Google fonts-->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.png">
</head>
<header class="header bg-white">
      <div class="container px-lg-3">
        <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span
              class="fw-bold text-uppercase text-dark">jewel-Store</span></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <!-- Link--><a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link" href="about.html">About us</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            <?php if(!isset($_SESSION['login_id'])): ?>
          <li class="nav-item">
            <a class="nav-link nav-login" href="login.php" id="login">
              <b>Login</b>
            </a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link nav-login" href="shop.php?page=my_order" id="login">
              <b>My Orders</b>
            </a>
          </li>
          <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" data-toggle="dropdown"  href="javascript:void(0)" aria-expanded="true">
                <div class="badge badge-danger cart-count">0</div>
                <i class="fa fa-shopping-cart"></i>
                <span>Cart</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:25vw">
                <div class="cart-list w-100" id="cart_product">
                
                  
                </div>
                
                <div class="d-flex bg-light justify-content-center w-100 p-2">
                    <a href="shop.php?page=cart" class="btn btn-sm btn-primary btn-block col-sm-4 text-white"><i class="fa fa-edit"></i>  View Cart</a>
                </div>
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link"  data-toggle="dropdown" aria-expanded="true" href="javascript:void(0)">
              <span>
                <div class="d-felx badge-pill">
                  <span class="fa fa-user mr-2"></span>
                  <span><b><?php echo ucwords($_SESSION['login_firstname']) ?></b></span>
                  <span class="fa fa-angle-down ml-2"></span>
                </div>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
              <a class="dropdown-item" href="signup.php" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
              <a class="dropdown-item" href="admin/ajax.php?action=logout2"><i class="fa fa-power-off"></i> Logout</a>
            </div>
          </li>
        <?php endif; ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    </header>
