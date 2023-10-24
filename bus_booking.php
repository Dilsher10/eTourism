<?php

$con = mysqli_connect("localhost","root","","etourism");
$id = $_GET['id'];
$sqlQuery = "SELECT * FROM `bus` WHERE id = $id";
$query = mysqli_query($con,$sqlQuery);
$data = mysqli_fetch_array($query);

?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['busbooking'])){
    include 'config.php';
    $customerName = $_POST['customerName'];
    $customerPhone = $_POST['customerPhone'];
    $customerEmail = $_POST['customerEmail'];
    $bus_name = $_POST['bus_name'];
    $bus_from = $_POST['bus_from'];
    $bus_to = $_POST['bus_to'];
    $bus_price = $_POST['bus_price'];
    
    $sqlQuery = "INSERT INTO `bus_booking`(`customerName`,`customerPhone`,`customerEmail`,`bus_name`,`bus_from`,`bus_to`, `bus_price`) VALUES ('$customerName','$customerPhone','$customerEmail','$bus_name','$bus_from','$bus_to','$bus_price');";
    $query = mysqli_query($con,$sqlQuery);
  
  $mail = new PHPMailer(true);
  
  try {            
      $mail->isSMTP();                                           
      $mail->Host       = 'smtp.gmail.com';                     
      $mail->SMTPAuth   = true;                                   
      $mail->Username   = 'dilsher.dahri10@gmail.com';                    
      $mail->Password   = 'mwgogvnhckwhcuhv';                             
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
      $mail->Port       = 465;                                    
  
      $mail->setFrom('dilsher.dahri10@gmail.com');
      $mail->addAddress('dilsher.dahri10@gmail.com');
      $mail->addAddress($customerEmail);             
  
      $mail->isHTML(true);                                 
      $mail->Subject = 'E-Tourism';
      $mail->Body    = "
                              <b>Bus Booking Details</b>
                              <p>Name: $customerName</p>
                              <p>Email: $customerEmail</p>
                              <p>Phone: $customerPhone</p>
                              <p>Bus: $bus_name</p>
                              <p>From: $bus_from</p>
                              <p>To: $bus_to</p>
                              <p>Price: $bus_price</p>
                              <p>Thank You</p>
      ";
  
      $mail->send();
      echo "
      <script>
      alert('Booking successfully')
      window.location.href='index.php';
      </script>
      ";
  } catch (Exception $e) {
      echo "
      <script>
      alert('Something went wrong')
      window.location.href='index.php';
      </script>
      ";
  }
    
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
    <title>Bus Booking</title>
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
      <h3 class="text-center text-warning fw-bold mt-5">Please Confirm Your Booking</h3>
        <div class="col-md-6 py-5">
          <img src="images/book-img.png" class="img-fluid">
        </div>
        <div class="col-md-6 py-5">
        <form action=" " method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold ">Name</label>
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
    <input type="hidden" value="<?php echo $data['bus_name']?>" class="form-control py-3" name="bus_name">
  </div>
  <div class="mb-3">
    <input type="hidden" value="<?php echo $data['bus_from']?>" class="form-control" name="bus_from">
  </div>
  <div class="mb-3">
    <input type="hidden" value="<?php echo $data['bus_to']?>" class="form-control" name="bus_to">
  </div>
  <div class="mb-3">
    <input type="hidden" value="<?php echo $data['bus_price']?>" class="form-control" name="bus_price">
  </div>
  <input type="hidden" value="<?php echo $data['id']?>" name="id">
  <button name="busbooking" type="submit" class="btn btn-primary px-4 fs-5">Book Now</button>
</form>
        </div>
      </div>
    </div>
</body>
</html>