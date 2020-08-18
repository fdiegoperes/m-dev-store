<?php 

  $active = 'Shop';
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
        </ul>

      </div> <!-- col-md-12 Finish -->

      <div class="col-md-3"> <!-- col-md-3 Begin -->

        <?php 
          include('includes/sidebar.php');
        ?>

      </div> <!-- col-md-3 Finish -->

      <div class="col-md-9"> <!-- col-md-9 Begin -->

        <?php 

        if(!isset($_GET['p_cat']) && !isset($_GET['cat'])){

          echo "

            <div class='box'> <!-- box Begin -->
              <h1>Shop</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dignissimos, blanditiis adipisci culpa cumque autem debitis, temporibus dolorem facere repellat excepturi at libero reiciendis cupiditate earum consequatur quidem quibusdam molestiae!
              </p>
            </div> <!-- box Finish -->

          ";
        }

        ?>

        <div class="row flex-container"> <!-- row Begin -->

          <?php 
          
            if(!isset($_GET['p_cat']) && !isset($_GET['cat'])){

              $per_page=6;
              if(isset($_GET['page'])) {
                $page = $_GET['page'];

              } else {
                $page = 1;

              }

                $start_from = ($page-1) * $per_page;
                $get_products = "select * from product order by 1 DESC LIMIT $start_from, $per_page";
                $run_products = $conn->query($get_products);

                while($row_products=$run_products->fetch()) {

                  $pro_id = $row_products['product_id'];
                  $pro_title = $row_products['product_title'];
                  $pro_price = $row_products['product_price'];
                  $pro_img1 = $row_products['product_img1'];
                  
                  echo "
                  
                    <div class='col-md-4 col-sm-6 center-responsive'>
                      <div class='product'>
                        <a href='details.php?pro_id=$pro_id'> 
                          <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                        </a>
                        <div class='text'>
                          <h3>
                            <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                          </h3>
                          <p class='price'>
                            CA$$pro_price
                          </p>
                          <p class='button'>
                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                              View Details
                            </a>
                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                              <i class='fa fa-shopping-cart'></i> Add to Cart
                            </a>
                          </p>
                        </div>
                      </div>
                    </div>

                  ";

                }

          ?>
        
        </div> <!-- row Finish -->

        <div class="center-all">
          <ul class="pagination">

            <?php 

              $query_products = "select count(*) from product";

              $result = $conn->query($query_products);

              $records_total = $result->fetchColumn();

              $pages_total = ceil($records_total / $per_page);

              echo "
              
                <li>
                
                  <a href='shop.php?page=1'> ".'First Page'. " </a>
                
                </li>
              
              ";

              for($i=1; $i <= $pages_total; $i++){
                
                echo "
              
                  <li>
                  
                    <a href='shop.php?page=".$i."'> ".$i." </a>
                  
                  </li>
              
                ";
                
              }

              echo "
              
                  <li>
                  
                    <a href='shop.php?page=$pages_total'> ".'Last Page'." </a>
                  
                  </li>
              
                ";

              }

            ?>
            
          </ul>
        </div>
        <div class="row flex-container">
          <?php 
            displayCategories();
            getCategorieProducts();
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