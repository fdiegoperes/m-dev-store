<?php
    $host = "db";
    $username = "root";
    $password = "root";
    $db = "ecom_store";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    
    // Function from tutorial
    function getRealIPUser () {

        switch(true){
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP']; 
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP']; 
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR']; 

            default : return $_SERVER['REMOTE_ADDR']; 
        }

    }

    // Function from PHP Documentation
    function real_ip() {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
            foreach ($matches[0] AS $xip) {
                if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
                    $ip = $xip;
                    break;
                }
            }
        } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif (isset($_SERVER['HTTP_X_REAL_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_X_REAL_IP'])) {
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        }
        return $ip;
    }

    function addCart() {

        global $conn;

        if(isset($_GET['add_cart'])){

            $ip_add = real_ip();
            $p_id = $_GET['add_cart'];
            $product_qty = $_POST['product_qty'];
            $product_size = $_POST['product_size'];
            $check_product = "select count(*) from cart where ip_add = '$ip_add' AND p_id = '$p_id'";
            $run_check = $conn->query($check_product);

            if($row_check=$run_check->fetchColumn()) {

                echo "<script> alert('This product has been added to the cart already.'); </script>";
                echo "<script> window.open('details.php?pro_id='$p_id','self'); </script>";

            } else {

                $insert_to_cart = "insert into cart (p_id, ip_add, qty, size) values (?,?,?,?)";
                $conn->prepare($insert_to_cart)->execute([$p_id, $ip_add , $product_qty, $product_size]);

                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

            }

        }

    }

    function getPro(){

        global $conn;

        $get_products = "select * from product order by 1 desc limit 0,8";

        $run_products = $conn->query($get_products);

        while($row_products=$run_products->fetch()) {
            
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];

            echo "
            
                <div class='col-md-4 col-sm-6 single'>
                    <div class='product'>
                        <a href='details.php?pro_id=$pro_id'>
                            <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                        </a>

                        <div class='text'>
                            <h3>
                                <a href='details.php?pro_id=$pro_id'>
                                
                                    $pro_title
                                
                                </a>
                            
                            </h3>

                            <p class='price'>
                            
                                CA$ $pro_price
                            
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

    }

    function getPCategories(){

        global $conn;

        $get_p_categories = "select * from product_categories";
        $run_p_categories = $conn->query($get_p_categories);

        while($row_p_categories = $run_p_categories->fetch()) {

            $p_cat_id = $row_p_categories['p_cat_id'];
            $p_cat_title = $row_p_categories['p_cat_title'];

            echo "
            
                <li>
                    <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
                </li>
            
            ";

        }

    }

    function getCategories() {

        global $conn;

        $get_categories = "select * from categories;";
        $run_categories = $conn->query($get_categories);

        while($row_categories=$run_categories->fetch()) {

            $cat_id = $row_categories['cat_id'];
            $cat_title = $row_categories['cat_title'];

            echo "
            
                <li>
                
                    <a href='shop.php?cat=$cat_id'> $cat_title</a>
                
                </li>
            
            ";

        }

    }

    function displayCategories() {

        global $conn;

        if(isset($_GET['p_cat'])) {

            $p_cat_id = $_GET['p_cat'];

            $get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";
            $run_p_cat = $conn->query($get_p_cat);
            $row_p_cat = $run_p_cat->fetch();
            $p_cat_title = $row_p_cat['p_cat_title'];
            $p_cat_desc = $row_p_cat['p_cat_desc'];

            $query_count_products = "select count(*) from product where p_cat_id = '$p_cat_id'";
            $run_products = $conn->query($query_count_products);
            $get_count_products = $run_products->fetchColumn();

            if($get_count_products == 0) {

                echo "
                
                    <div class='box'>
                        No Product found in this product category.
                    </div>
                
                ";

            } else {
                echo "
                
                    <div class='box'>
                        <h1> $p_cat_title </h1>
                        <p> $p_cat_desc </p>
                    </div>
                
                ";
            }

            $get_products = "select * from product where p_cat_id = '$p_cat_id'";
            $run_products = $conn->query($get_products);

            while($row_products=$run_products->fetch()){

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
                                    <a href='details.php?pro_id=$pro_id'>
                                    
                                        $pro_title
                                    
                                    </a>
                                
                                </h3>

                                <p class='price'>
                                
                                    CA$ $pro_price
                                
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
        }
    }

    function getCategorieProducts(){

        global $conn;

        if(isset($_GET['cat'])) {

            $cat_id = $_GET['cat'];
            $get_cat = "select * from categories where cat_id = '$cat_id'";
            $run_cat = $conn->query($get_cat);
            $row_cat = $run_cat->fetch();

            $cat_title = $row_cat['cat_title'];
            $cat_desc = $row_cat['cat_desc'];

            $count_products = "select count(*) from product where cat_id = '$cat_id'";
            $run_count_products = $conn->query($count_products);
            $products_quantity = $run_count_products->fetchColumn();

            if($products_quantity == 0) {
                
                echo "

                    <div class='box'>
                        <h1>No products found in this category</h1>
                    </div>
                
                ";

            } else {
                echo "

                    <div class='box'>
                        <h1> $cat_title </h1>
                        <p> $cat_desc </p>
                    </div>
                
                ";
            }

            $get_products = "select * from product where cat_id = '$cat_id' LIMIT 0,6";
            $run_get_products = $conn->query($get_products);
            

            while($row_products=$run_get_products->fetch()){

                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_desc = $row_products['product_desc'];
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

        }
        
    }

    function itemsInCart() {

        global $conn;

        $ip_add = real_ip();
        $get_items = "select count(*) from cart where ip_add = '$ip_add'";
        $run_items = $conn->query($get_items);
        $count_items = $run_items->fetchColumn();

        echo $count_items;

    }

    function cartTotal() {

        global $conn;

        $ip_add = real_ip();
        $total_sum = 0;
        $select_cart = "select * from cart where ip_add = '$ip_add'";
        $run_items = $conn->query($select_cart);

        while($count_items = $run_items->fetch()) {
            
            $pro_id = $count_items['p_id'];
            $pro_qty = $count_items['qty'];
            $get_price = "select * from product where product_id = '$pro_id'";
            $run_price = $conn->query($get_price);

            while($row_price=$run_price->fetch()) {

                $subtotal = $row_price['product_price'] * $pro_qty;
                $total += $subtotal;

            }

        }
        
        echo "CA$" . $total;

    }


?>

