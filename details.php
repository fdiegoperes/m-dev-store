<?php 

  include('includes/header.php');

?>

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
          <li>
            <a href="shop.php?p_cat='<?php echo $product_cat_id; ?>'"> <?php echo $p_cat_title; ?> </a>
          </li>
          <li> <?php echo $pro_title; ?> </li>
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
                    <div class="center-all"><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1 ?>" alt="Product-1"></div>
                  </div>
                  <div class="item">
                    <div class="center-all"><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img2 ?>" alt="Product-2"></div>
                  </div>
                  <div class="item">
                    <div class="center-all"><img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img3 ?>" alt="Product-3"></div>
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

              <h1 class="text-center"> <?php echo $pro_title ?> </h1>

              <?php 
              
                addCart();
              
              ?>

              <form name="addToCart" action="details.php?add_cart=<?php echo $pro_id ?>" class="form-horizontal" method="post">
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
                  <label class="col-md-5 control-label">Product Size</label>

                  <div class="col-md-7"> <!-- col-md-7 Begin -->
                    <select name="product_size" class="form-control" required>

                      <option value='' disabled selected>- Select -</option>
                      <option>Small</option>
                      <option>Medium</option>
                      <option>Large</option>

                    </select>
                  </div> <!-- col-md-7 Finish -->
                </div> <!-- form-group Finish -->

                <p class="price">CA$<?php echo $pro_price ?></p>

                <p class="text-center buttons">
                  <button class="btn btn-primary i fa fa-shopping-cart">
                    Add to Cart
                  </button>
                </p>

              </form>

            </div> <!-- box Finish -->

            <div class="row" id="thumbs"> <!-- row Begin -->

              <div class="col-xs-4"> <!-- "col-xs-4 Begin -->
                <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                  <img src="admin_area/product_images/<?php echo $pro_img1 ?>" alt="Product-1" class="img-responsive">
                </a>
              </div> <!-- "col-xs-4 Finish -->

              <div class="col-xs-4"> <!-- "col-xs-4 Begin -->
                <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                  <img src="admin_area/product_images/<?php echo $pro_img2 ?>" alt="Product-2" class="img-responsive">
                </a>
              </div> <!-- "col-xs-4 Finish -->

              <div class="col-xs-4"> <!-- "col-xs-4 Begin -->
                <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                  <img src="admin_area/product_images/<?php echo $pro_img3 ?>" alt="Product-3" class="img-responsive">
                </a>
              </div> <!-- "col-xs-4 Finish -->              

            </div> <!-- row Finish -->

          </div> <!-- col-sm-6 Finish -->

        </div> <!-- row Finish -->

        <div class="box" id="details">

          <h4>Product Details</h4>
          <p>
            <?php echo $pro_desc ?>
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
          
          <?php 
          
            randomProducts(3);
          
          ?>

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