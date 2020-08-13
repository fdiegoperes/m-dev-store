<?php 
  include('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <title>Insert Product</title>
</head>
<body>
  
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li class="active">
          <i class="fa fa-dashboard"></i> Dashboard / Insert Products
        </li>
      </ol>
    </div>
  </div>

  <div class="row"> <!-- row Begin -->
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-money fa-fw"></i> Insert Product
          </h3>
        </div>

        <div class="panel-body"> <!-- panel-body Begin -->
          <form method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-3 control-label">Product Title</label>
              <div class="col-md-6">
                <input name="product_title" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group"> <!-- form-group Begin -->
              <label class="col-md-3 control-label">Product Category</label>
              <div class="col-md-6">
                <select name="product_cat" class="form-control">
                  <option>Select a Category Product</option>

                  <?php  
                    $get_p_cats = "select * from product_categories";
                    $run_p_cats = mysqli_query($con, $get_p_cats);

                    while($row_p_cats=mysqli_fetch_array($run_p_cats)) {
                      $p_cat_id = $row_p_cats['p_cat_id'];
                      $p_cat_title = $row_p_cats['p_cat_title'];

                      echo "
                        <option value='$p_cat_id'>$p_cat_title</option>
                      ";
                    }
                  ?>

                </select>
              </div>
            </div> <!-- form-group Finish -->

            <div class="form-group"> <!-- form-group Begin -->
              <label class="col-md-3 control-label">Category</label>
              <div class="col-md-6">
                <select name="product_cat" class="form-control">
                  <option>Select a Category</option>

                  <?php  
                    $get_cat = "select * from categories";
                    $run_cat = mysqli_query($con, $get_cat);

                    while($row_cat=mysqli_fetch_array($run_cat)) {
                      $cat_id = $row_cat['cat_id'];
                      $cat_title = $row_cat['cat_title'];

                      echo "
                        <option value='$cat_id'>$cat_title</option>
                      ";
                    }
                  ?>

                </select>
              </div>
            </div> <!-- form-group Finish -->

            <div class="form-group">
              <label class="col-md-3 control-label">Product Image 1</label>
              <div class="col-md-6">
                <input name="product_img1" type="file" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Product Image 2</label>
              <div class="col-md-6">
                <input name="product_img2" type="file" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Product Image 3</label>
              <div class="col-md-6">
                <input name="product_img3" type="file" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Product Price</label>
              <div class="col-md-6">
                <input name="product_price" type="file" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Keywords</label>
              <div class="col-md-6">
                <input name="product_keywords" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Product Desc</label>
              <div class="col-md-6">
                <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-6">
                <input name="submit" type="submit" value="Insert Product" class="btn btn-primary form-control">

                </input>
              </div>
            </div>

          </form>
        </div> <!-- panel-body Finish -->
      </div>
    </div>
  </div> <!-- row Finish -->

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>
  <script src="js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({selector:'textarea'});</script>
</body>
</html>