<?php 
  include('includes/db.php');
?>

<div class="box">
  <div class="box-header">
    <div class="center-all">
      <h1> Login </h1>
      <p class="lead"> Do you already have an account? </p>
      <p class="text-muted"> 
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus nostrum corporis repudiandae, fugit id harum voluptate, perferendis culpa iure vel est ab reprehenderit aliquam inventore cumque. Blanditiis vitae eveniet quis. 
      </p>
    </div>
  </div>
  <form method="post" action="checkout.php">
    <div class="form-group">
      <label>Email</label>
      <input name="c_email" type="text" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input name="c_pass" type="password" class="form-control" required>
    </div>
    <div class="text-center">
      <button name="login" value="Login" class="btn btn-primary">
        <i class="fa fa-sign-in"></i> Login
      </button>
    </div>
  </form>
  <div class="center-all">
    <a href="customer_register.php">
      <h3> Don't have an account? Register here: </h3>
    </a>
  </div>
</div>

<?php 

  if(isset($_POST['login'])) {

    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];

    $get_ip = real_ip();

    $customer_customer = "select count(*) from customers where customer_email ='$customer_email' AND customer_pass='$customer_pass'";
    $run_customer = $conn->query($customer_customer);
    $check_customer = $run_customer->fetchColumn();

    $select_cart = "select count(*) from cart where ip_add='$get_ip'";
    $run_cart = $conn->query($select_cart);
    $check_cart = $run_cart->fetchColumn();
    
    if($check_customer == 0 ) {
      echo "<script>alert('Your email or password is not correct');</script>";

      exit();
    }

    if($check_customer == 1 AND $check_cart == 0) {
      $_SESSION['customer_email'] = $customer_email;
      echo "<script>alert('You are logged in.');</script>";
      echo "<script>window.open('customer/my_account.php?my_orders','_self');</script>";
    } else {
      $_SESSION['customer_email'] = $customer_email;
      echo "<script>alert('You are logged in.');</script>";
      echo "<script>window.open('checkout.php', '_self');</script>";
    }
  }

?>