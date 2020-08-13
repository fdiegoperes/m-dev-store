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
            <li>
              <a href="index.php">Home</a>
            </li>
            <li class="active">
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
            Shop
          </li>
        </ul>

      </div> <!-- col-md-12 Finish -->

      <div class="col-md-3"> <!-- col-md-3 Begin -->

        <?php 
          include('includes/sidebar.php');
        ?>

      </div> <!-- col-md-3 Finish -->

      <div class="col-md-9"> <!-- col-md-9 Begin -->
        <div id="productMain" class="row"> <!-- row Begin -->
          <div class="col-sm-6"> <!-- col-sm-6 Begin -->
            <div id="mainImage"> <!-- mainImage Begin -->
              <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!-- myCarousel Begin -->

                <ol class="carousel-indicators">
                  <li data-target="myCarousel" data-slide-to="0" class="active" ></li>
                  <li data-target="myCarousel" data-slide-to="1"></li>
                  <li data-target="myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="item active">
                    <div class="center-all"><img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1"></div>
                  </div>
                  <div class="item">
                    <div class="center-all"><img class="img-responsive" src="admin_area/product_images/product-1b.jpg" alt="Product-2"></div>
                  </div>
                  <div class="item">
                    <div class="center-all"><img class="img-responsive" src="admin_area/product_images/product-1c.jpg" alt="Product-1"></div>
                  </div>
                </div>

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left">
                    <span class="sr-only">Previous</span>
                  </span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right ">
                    <span class="sr-only">Next</span>
                  </span>
                </a>

              </div> <!-- myCarousel Finish -->
            </div> <!-- mainImage Finish -->
          </div> <!-- col-sm-6 Finish -->

          <div class="col-sm-6"> <!-- col-sm-6 Begin -->
            <div class="box"> <!-- box Begin -->

              <h1 class="text-center">The Super Computer</h1>

              <form action="details.php" class="form-horizontal method" method="post">
                <div class="form-group"> <!-- form-group Begin -->
                  <label for="" class="col-md-5 control-label">
                    Products Quantity
                  </label>

                  <div class="col-md-7"> <!-- col-md-7 Begin -->
                    <select name="product_qty" id="" class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div> <!-- col-md-7 Finish -->

                </div> <!-- form-group Finish -->

                <div class="form-group"> <!-- form-group Begin -->
                  <label class="col-md-5 control-label">Product Power</label>

                  <div class="col-md-7"> <!-- col-md-7 Begin -->
                    <select name="product_size" class="form-control">
                      <option>-Select-</option>
                      <option>Small Power</option>
                      <option>Medium Power</option>
                      <option>Super Power</option>
                    </select>
                  </div> <!-- col-md-7 Finish -->
                </div> <!-- form-group Finish -->

                <p class="price">CA$300.00</p>

                <p class="text-center button">
                  <button class="btn btn-primary i fa fa-shopping-cart">
                    Add to Cart
                  </button>
                </p>

              </form>

            </div> <!-- box Finish -->

            <div class="row" id="thumbs"> <!-- row Begin -->

              <div class="col-xs-4"> <!-- "col-xs-4 Begin -->
                <a data-target="myCarousel" data-slide-to="0" href="#" class="thumb">
                  <img src="admin_area/product_images/product-1.jpg" alt="Product-1" class="img-responsive">
                </a>
              </div> <!-- "col-xs-4 Finish -->

              <div class="col-xs-4"> <!-- "col-xs-4 Begin -->
                <a data-target="myCarousel" data-slide-to="1" href="#" class="thumb">
                  <img src="admin_area/product_images/product-1b.jpg" alt="Product-1b" class="img-responsive">
                </a>
              </div> <!-- "col-xs-4 Finish -->

              <div class="col-xs-4"> <!-- "col-xs-4 Begin -->
                <a data-target="myCarousel" data-slide-to="2" href="#S" class="thumb">
                  <img src="admin_area/product_images/product-1c.jpg" alt="Product-1c" class="img-responsive">
                </a>
              </div> <!-- "col-xs-4 Finish -->              

            </div> <!-- row Finish -->

          </div> <!-- col-sm-6 Finish -->

        </div> <!-- row Finish -->

        <div class="box" id="details">

          <h4>Product Details</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque necessitatibus ad rem optio culpa dolore in magnam saepe qui deleniti cumque, dolor, iste voluptatum eum! Minus mollitia nesciunt quis et?
          </p>

          <h4>Size</h4>

          <ul>
            <li>Small</li>
            <li>Medium</li>
            <li>Large</li>
          </ul>

        </div>

        <div id="row same-height-row">

          <div class="col-md-3 col-sm-6">
            <div class="box same-height headline">
              <h3 class="text-center">Products You May Like</h3>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 center-responsive">
            <div class="product same-height">
              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
              </a>
              <div class="text">
                <h3><a href="details.php">The Super Computer</a></h3>
                <p class="price">CA$300.00</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 center-responsive">
            <div class="product same-height">
              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/product-1b.jpg" alt="Product 1b">
              </a>
              <div class="text">
                <h3><a href="details.php">The Super Computer</a></h3>
                <p class="price">CA$300.00</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 center-responsive">
            <div class="product same-height">
              <a href="details.php">
                <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
              </a>
              <div class="text">
                <h3><a href="details.php">The Ultra Computer</a></h3>
                <p class="price">CA$3000.00</p>
              </div>
            </div>
          </div>

        </div>

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