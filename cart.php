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
            <li>
              <a href="shop.php">Shop</a>
            </li>
            <li>
              <a href="customer/my_account.php">My account</a>
            </li>
            <li class="active">
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
            Cart
          </li>
        </ul>

      </div> <!-- col-md-12 Finish -->
      
      <div id="cart" class="col-md-9">
        <div class="box">
          <form action="cart.php" method="post" enctype="multipart/form-data">
            <h1>Shopping Cart</h1>
            <p class="text-muted">You currently have 3 items in your cart</p>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th colspan="2">Product</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Power</th>
                    <th colspan="1">Delete</th>
                    <th colspan="2">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img class="img-responsive" src="admin_area/product_images/product-1b.jpg" alt="Product-1b">
                    </td>
                    <td>
                      <a href="#">The Super Computer</a>
                    </td>
                    <td>
                      2
                    </td>
                    <td>
                      CA$300.00
                    </td>
                    <td>
                      Super Power
                    </td>
                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>
                    <td>
                      $600.00
                    </td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>
                      <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product-2">
                    </td>
                    <td>
                      <a href="#">The Ultra Computer</a>
                    </td>
                    <td>
                      1
                    </td>
                    <td>
                      CA$3000.00
                    </td>
                    <td>
                      Super Power
                    </td>
                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>
                    <td>
                      $3000.00
                    </td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td>
                      <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product-1">
                    </td>
                    <td>
                      <a href="#">The Super Computer 2</a>
                    </td>
                    <td>
                      2
                    </td>
                    <td>
                      CA$300.00
                    </td>
                    <td>
                      Super Power
                    </td>
                    <td>
                      <input type="checkbox" name="remove[]">
                    </td>
                    <td>
                      $600.00
                    </td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <th colspan="5">Total</th>
                    <th colspan="2">$4200.00</th>
                  </tr>
                </tfoot>
                
              </table>
            </div>

            <div class="box-footer">
              <div class="pull-left">
                <a href="index.php" class="btn btn-default">
                  <i class="fa fa-chevron-left"></i> Continue Shopping
                </a>
              </div>
              <div class="pull-right">
                <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                  <i class="fa fa-refresh"></i> Update Cart
                </button>

                <a href="checkout.php" class="btn btn-primary">
                  Proceed to Checkout  <i class="fa fa-chevron-right"></i>
                </a>

              </div>
            </div>
            
          </form>
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
      </div>

      <div class="col-md-3">
        <div id="order-summary" class="box">
          <div class="box-header">
            <h3>Order Summary</h3>
          </div>
          <p class="text-muted">
            Shipping and additional costs are calculated based on the value you have entered.
          </p>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td> Sub-Total </td>
                  <th> CA$4200.00 </th>
                </tr>
                <tr>
                  <td>Shipping and Handling</td>
                  <td>CA$0</td>
                </tr>
                <tr>
                  <td>Tax</td>
                  <th>CA$0</th>
                </tr>
                <tr class="total">
                  <td>Total</td>
                  <th>CA$4200.00</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div> <!--container Finish -->
  </div> <!-- content Finish -->

  <?php 
  
    include('includes/footer.php');

  ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
</body>
</html>