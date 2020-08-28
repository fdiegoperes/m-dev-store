<?php 
  include('includes/db.php');
?>

<div id="footer"> <!-- footer Begin -->
  <div class="container"> <!-- container Begin -->
    <div class="row"> <!-- row Begin -->
      <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->

      <h4>Pages</h4>

        <ul>
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="checkout.php">My Account</a></li>
        </ul>

        <hr>

        <h4>User Section</h4>

        <ul>
          
          <?php 
            if(!isset($_SESSION['customer_email'])) {
              echo "<a href='checkout.php'>Login</a>";
              
            } else {
              echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
            }
          ?>

          <li><a href="customer_register.php">Register</a></li>
        </ul>

        <hr class="hidden-md hidden-lg hidden-sm">

      </div> <!-- col-sm-6 col-md-3 Finish -->

      <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->

        <h4>Top Product Categories</h4>

        <ul>
          <?php 
          
            $get_p_cats = "select * from product_categories";

            $run_p_cats = $conn->query($get_p_cats);

            while($row_p_cats=$run_p_cats->fetch()) {

              $p_cat_id = $row_p_cats['p_cat_id'];
              $p_cat_title = $row_p_cats['p_cat_title'];

              echo "
              
                <li>
                  <a href='shop.php?p_cat=$p_cat_id'>
                    $p_cat_title
                  </a>
                </li>
              
              ";

            }
          
          ?>
        </ul>

        <hr class="hidden-md hidden-lg">

      </div> <!-- col-sm-6 col-md-3 Finish -->

      <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
        <h4>Find Us</h4>
        <p>
          <strong>M-Dev Media inc.</strong>
          <br/>London, ON, 
          <br/>Canada.
          <br/>(226) 998 1653
          <br/>Fdiego.peres21@gmail.com
          <br/><strong>@FDiegoPeres</strong>
        </p>

        <a href="contact.php">Check Our Contact Page</a>

        <hr class="hidden-md hidden-lg">

      </div> <!-- col-sm-6 col-md-3 Finish -->

      <div class="col-sm-6 col-md-3">

        <h4>Get The News</h4>

        <p class="text-muted">
          Don't miss our latest updates.
        </p>

        <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=DiarioLondonOn', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post">
          <div class="input-group"> <!-- input-group Begin -->

            <input type="text" class="form-control" name="email">

            <input type="hidden" value="DiarioLondonOn" name="uri"/><input type="hidden" name="loc" value="en_US"/>

            <span class="input-group-btn">
              <input type="submit" value="Subscribe" class="btn btn-default">
            </span>

          </div> <!-- input-group Finish -->
        </form>

        <hr>

        <h4>Keep In Touch</h4>

        <p class="social">
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-envelope"></a>
        </p>

      </div>

    </div> <!-- row Finish -->
  </div> <!-- container Finish -->
</div> <!-- footer Finish -->

<div id="copyright"> <!-- #copyright Begin -->
  <div class="container"> <!-- container Begin -->

    <div class="col-md-6"> <!-- "col-md-6 Begin -->

      <p class="pull-left">&copy; 2020 M-Dev Store All Rights Reserved</p>

    </div> <!-- "col-md-6 Finish -->
    
    <div class="col-md-6"> <!-- "col-md-6 Begin -->

      <p class="pull-right">
        Theme by: <a href="#">@FDiegoPeres</a>
      </p>
    
    </div> <!-- "col-md-6 Finish -->

  </div> <!-- container Finish -->
</div> <!-- #copyright Finish -->