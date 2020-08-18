<?php 

  $active='Home';
  include('includes/header.php');

?>

<div class="container" id="slider"> <!-- container Begin -->
    <div class="col-md-12"> <!-- col-md-12 Begin -->
      <div class="carousel slide" id="myCarousel" data-ride="carousel"> <!-- carousel slide Begin -->

        <ol class="carousel-indicators"> <!-- carousel-indicators Begin -->
          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol> <!-- carousel-indicators Finish -->

        <div class="carousel-inner"> <!-- carousel-inner Begin -->
          <?php 
          
            $run_slides = $conn->query('select * from slider LIMIT 0,1');
            while($row_slides=$run_slides->fetch()){
              
              $slide_name = $row_slides['slide_name'];
              $slide_image = $row_slides['slide_image'];

              echo "
                <div class='item active'>
                  <img src='admin_area/slides_images/$slide_image'>
                </div>
              ";
            }

            $run_slides = $conn->query('select * from slider LIMIT 1,3');
            while($row_slides=$run_slides->fetch()){

              $slide_name = $row_slides['slide_name'];
              $slide_image = $row_slides['slide_image'];

              echo "
                <div class='item'>
                  <img src='admin_area/slides_images/$slide_image'>
                </div>
              ";
            }
          ?>         
        </div> <!-- carousel-inner Finish -->

        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a href="#myCarousel" class="right carousel-control" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>

      </div> <!-- carousel slide Finish -->
    </div> <!-- col-md-12 Finish -->
  </div> <!-- container Finish -->

  <div id="advantages"> <!-- advantages Begin -->
    <div class="container"> <!-- container Begin -->
      <div class="same-height-row"> <!-- same-height-row Begin -->
        <div class="col-sm-4"> <!-- col-sm-4 Begin -->
          <div class="box same-height"> <!-- box same-height Begin -->
            <div class="icon"> <!-- icon Begin -->

              <i class="fa fa-heart"></i>

            </div> <!-- icon Finish -->

            <h3><a href="#">Best Offers</a></h3>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur corrupti, dolores quaerat illo debitis temporibus! Quo consequatur vero placeat aliquam aliquid sapiente quae voluptatum neque, inventore assumenda fugit amet nobis?</p>

          </div> <!-- box same-height Finish -->
        </div> <!-- col-sm-4 Finish -->

        <div class="col-sm-4"> <!-- col-sm-4 Begin -->
          <div class="box same-height"> <!-- box same-height Begin -->
            <div class="icon"> <!-- icon Begin -->

              <i class="fa fa-tag"></i>

            </div> <!-- icon Finish -->

            <h3><a href="#">Best Prices</a></h3>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur corrupti, dolores quaerat illo debitis temporibus! Quo consequatur vero placeat aliquam aliquid sapiente quae voluptatum neque, inventore assumenda fugit amet nobis?</p>

          </div> <!-- box same-height Finish -->
        </div> <!-- col-sm-4 Finish -->
        
        <div class="col-sm-4"> <!-- col-sm-4 Begin -->
          <div class="box same-height"> <!-- box same-height Begin -->
            <div class="icon"> <!-- icon Begin -->

              <i class="fa fa-thumbs-up"></i>

            </div> <!-- icon Finish -->

            <h3><a href="#">100% Original</a></h3>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur corrupti, dolores quaerat illo debitis temporibus! Quo consequatur vero placeat aliquam aliquid sapiente quae voluptatum neque, inventore assumenda fugit amet nobis?</p>

          </div> <!-- box same-height Finish -->
        </div> <!-- col-sm-4 Finish -->        
      </div> <!-- same-height-row Finish -->
    </div> <!-- container Finish -->
  </div> <!-- advantages Finish -->

  <div id="hot"> <!-- #hot Begin -->
    <div class="box">
      <div class="container"> <!-- container Begin -->
        <div class="col-md-12">

          <h2>
            Our Latest Products
          </h2>

        </div>
      </div>
    </div> <!-- container Finish -->
  </div> <!-- #hot Finish -->

  <div id="content" class="container"> <!-- container Begin -->
    <div class="row flex-container"> <!-- row Begin -->

      <?php 
        getPro();
      ?>

    </div> <!-- row Finish -->
  </div> <!-- container Finish -->

  <?php 
  
    include('includes/footer.php');
  
  ?>
  

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
</body>
</html>