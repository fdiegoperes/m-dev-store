<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css"></link>
    <title>M-Dev Store</title>
</head>
<body>
 
  <div id="top"> <!-- top Begin -->
    <div class="container"> <!-- container Begin -->
      <div class="col-md-6 offer"> <!-- col-md-6 offer Begin -->
        
        <a href="" class="btn btn-success btn-sm">Welcome</a>
        <a href="checkout.php">4 Items In Your Cart | Total Price: CA$300 </a>
     
      </div> <!-- col-md-6 offer Finish -->
      <div class="col-md-6"> <!-- col-md-6 Begin -->
        
        <ul class="menu"> <!-- menu Begin -->
          <li>
            <a href="customer_register.php">Register</a>
          </li>
          <li>
            <a href="customer/my_account.php">My Account</a>
          </li>
          <li>
            <a href="cart.php">Go To Cart</a>
          </li>
          <li>
            <a href="checkout.php">Login</a>
          </li>
        </ul> <!-- menu Finish -->

      </div> <!-- col-md-6 Finish -->
    </div> <!-- container Finish -->
  </div> <!-- top Finish -->

  <div id="navbar" class="navbar navbar-default"> <!-- navbar navbar-default Begin -->
    <div class="container"> <!-- container Begin -->
      <div class="navbar-header"> <!-- navbar-header Begin -->
        
        <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home Begin -->
          <img src="images/ecom-store-logo.png" alt="M-Dev-Store Logo" class="hidden-xs">
          <img src="images/ecom-store-logo-mobile.png" alt="M-Dev-Store Logo Mobile" class="visible-xs">
        </a> <!-- navbar-brand home Finish -->

        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle Navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>

        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
          <span class="sr-only">Toggle Search</span>
          <i class="fa fa-search"></i>
        </button>

      </div> <!-- navbar-header Finish -->
      <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Begin -->
        <div class="padding-nav"> <!-- padding-nav Begin -->

          <ul class="nav navbar-nav left">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="shop.php">Shop</a>
            </li>
            <li>
              <a href="customer/my_account.php">My account</a>
            </li>
            <li>
              <a href="cart.php">Shopping Cart</a>
            </li>
            <li>
              <a href="contact.php">Contact Us</a>
            </li>
          </ul>

        </div> <!-- padding-nav Finish -->

        <a href="cart.php" class="btn navbar-btn btn-primary right">
          <i class="fa fa-shopping-cart"></i>
          <span>4 Items In Your Cart</span>
        </a>

        <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right Begin -->
           
          <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
            <span class="sr-only">Toggle Search</span>
            <i class="fa fa-search"></i>
          </button>

        </div> <!-- navbar-collapse collapse right Finish -->

        <div class="collapse clearfix" id="search"> <!-- collapse clearfix Begin -->

          <form method="get" action="results.php" class="navbar-form"> <!-- navbar-form Begin -->

            <div class="input-group"> <!--input-group Begin -->

              <input type="text" class="form-control" placeholder="Search" name="user_query" required>

              <span class="input-group-btn">
                <button type="submit" name="search" value="Search" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </span>

            </div> <!--input-group Finish -->

          </form> <!-- navbar-form Finish -->

        </div> <!-- collapse clearfix Finish -->
      </div> <!-- navbar-collapse collapse Finish -->
    </div> <!-- container Finish -->
  </div> <!-- navbar navbar-default Finish -->

  <div id="content"> <!-- content Begin -->
    <div class="container"> <!--container Begin -->
      <div class="col-md-12"> <!-- col-md-12 Begin -->

        <ul class="breadcrumb">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            Register
          </li>
        </ul>

      </div> <!-- col-md-12 Finish -->

      <div class="col-md-3"> <!-- col-md-3 Begin -->

        <?php 
          include('includes/sidebar.php');
        ?>

      </div> <!-- col-md-3 Finish -->

      <div class="col-md-9"> <!-- col-md-9 Begin -->
        <div class="box"> <!-- box Begin -->
          <div class="box-header"> <!-- box-header Begin -->
            <div class="center-all"> <!-- center-all Begin -->
              <h2>Register a new account</h2>
            </div> <!-- center-all Finish -->

            <form action="customer_register.php" method="post" enctype="multiplat/form-data">

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Name</label>
                <input type="text" class="form-control" name="c_name" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Email</label>
                <input type="text" class="form-control" name="c_email" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Password</label>
                <input type="password" class="form-control" name="c_pass" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Country</label>
                <input type="text" class="form-control" name="c_country" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your City</label>
                <input type="text" class="form-control" name="c_city" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Contact</label>
                <input type="text" class="form-control" name="c_contact" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Address</label>
                <input type="text" class="form-control" name="c_address" required>
              </div> <!-- form-group Finish -->

              <div class="form-group"> <!-- form-group Begin -->
                <label>Your Profile Picture</label>
                <input type="file" class="form-control form-height-custom" name="c_image" required>
              </div> <!-- form-group Finish -->

              <div class="text-center">
                <button type="submit" name="register" class="btn btn-primary">
                  <i class="fa fa-user"></i> Register
                </button>
              </div>

            </form>

          </div> <!-- box-header Finish -->
        </div> <!-- box Finish -->
      </div> <!-- col-md-9 Finish -->

    </div> <!--container Finish -->
  </div> <!-- content Finish -->

  <?php 
  
    include('includes/footer.php');

  ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
</body>
</html>