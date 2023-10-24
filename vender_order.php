<?php

session_start();

if(isset($_SESSION['username'])){
$con = mysqli_connect("localhost","root","","etourism");
$Id = $_GET['Id'];
$sqlQuery = "SELECT * FROM `vender_packages` WHERE Id = $Id";
$query = mysqli_query($con,$sqlQuery);
$data = mysqli_fetch_array($query);
}
else{
  header("location:login.php");
}

?>


<?php

if(isset($_POST['confirmorder'])){
  include 'config.php';
  $customerName = $_POST['customerName'];
  $customerPhone = $_POST['customerPhone'];
  $customerEmail = $_POST['customerEmail'];
  $departureDate = $_POST['departureDate'];
  $packageName = $_POST['packageName'];
  $packagePrice = $_POST['packagePrice'];
  $packageCategory = $_POST['packageCategory'];
  
  $sqlQuery = "INSERT INTO `vender_orders`(`customerName`,`customerPhone`,`customerEmail`,`departureDate`,`packageName`,`packagePrice`, `packageCategory`) VALUES ('$customerName','$customerPhone','$customerEmail','$departureDate','$packageName','$packagePrice','$packageCategory');";
  $query = mysqli_query($con,$sqlQuery);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="js/app.js">
    <title>Order</title>
</head>
<body>

<!-- Nav Bar -->

<nav class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-white fw-bold fs-4" href="#">E-Tourism</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="packages.php">PACKAGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customPackage.php">CUSTOM PACKAGE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                                <?php
                                if(isset($_SESSION['username'])){
                                    echo "
                                    <a class='nav-link' href='logout.php'>LOGOUT</a>
                                    ";
                                }
                                else{
                                    echo "
                                    <a class='nav-link' href='login.php'>LOGIN</a>
                                    ";
                                }
                                
                                ?>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>

   


    <div class="container">
      <div class="row">
      <h3 class="text-center text-warning fw-bold mt-5">Please Confirm Your Order</h3>
        <div class="col-md-6 py-5">
          <img src="images/book-img.png" class="img-fluid">
        </div>
        <div class="col-md-6 py-5">
        <form action=" " method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold ">Full Name</label>
    <input type="text"  class="form-control" placeholder="Enter Name" name="customerName" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Phone</label>
    <input type="text"  class="form-control" placeholder="Enter Number" name="customerPhone" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Email</label>
    <input type="text"  class="form-control" placeholder="Enter Email" name="customerEmail" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Departure</label>
    <input type="date"  class="form-control" placeholder="Enter Departure Date" name="departureDate" required>
  </div>
  <div class="mb-3">
    <input type="hidden" value="<?php echo $data['packageName']?>" class="form-control py-3" placeholder="Enter Product Name" name="packageName">
  </div>
  <div class="mb-3">
    <input type="hidden" value="<?php echo $data['packagePrice']?>" class="form-control" placeholder="Enter Product Price" name="packagePrice">
  </div>
 
  <div class="mb-3">
    <label class="form-label fs-5 fw-bold py-2">Select Package Category</label>
    <select class="form-select" name="packageCategory">
      <option value="<?php echo $data['packageCategory']?>"><?php echo $data['packageCategory']?></option>
    </select>
  </div>

  <input type="hidden" value="<?php echo $data['Id']?>" name="Id">
  <button name="confirmorder" type="submit" class="btn btn-primary px-4 fs-5">Confirm Order</button>
</form>
        </div>
      </div>
    </div>





    <script src="js/bootstrap.js"></script>
</body>
</html>


<?php
include 'footer.php';
?>



