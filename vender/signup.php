<?php
session_start();
include('includes/header.php'); 
include 'config.php';
?>


<?php

if(isset($_POST['signup_btn'])){

  include 'config.php';

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sqlQuery = "INSERT INTO `vender`(`username`, `email`, `password`) VALUES ('$username','$email','$password');";

  $query = mysqli_query($con,$sqlQuery);

  if($query)
  {
    echo "
    <script>
    alert('Vender Added Successfully')
    window.location.href='index.php';
    </script>
    ";
  }
  else 
  {
    echo "
    <script>
    alert('Invalid Input')
    window.location.href='signup.php';
    </script>
    ";
  }

  exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

<div class="container">
<div class="row justify-content-center">
  <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Vender Signup</h1>
                <?php
                include 'config.php';

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="" method="POST">

                <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
                    <button type="submit" name="signup_btn" class="btn btn-primary btn-user btn-block"> Signup </button>
                    <hr>
                </form>
                <p>Already Account ? <a href="login.php">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
</body>
</html>

<?php
include('includes/scripts.php'); 
?>