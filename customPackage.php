<?php
include('header.php');
?>

<?php

if(isset($_POST['custompackagebtn'])){
  include 'config.php';
  $Name = $_POST['Name'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];
  $Where_To = $_POST['Where_To'];
  $Departure = $_POST['Departure'];
  $Arrival = $_POST['Arrival'];
  $How_Many = $_POST['How_Many'];
  $Room = $_POST['Room'];
  $sqlQuery = "INSERT INTO `customorders`(`Name`, `Phone`, `Email`, `Where_To`, `Departure`, `Arrival`, `How_Many`, `Room`) VALUES ('$Name','$Phone','$Email','$Where_To','$Departure','$Arrival','$How_Many','$Room');";
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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <title>Custom Package</title>
</head>

<body>
    
    
    <div class="container">
      <div class="row">
      <h1 class="text-center text-warning fw-bold mt-5">CUSTOM PACKAGE</h1>
        <div class="col-md-6 py-5">
          <img src="images/g-1.jpg" alt="" class="img-fluid border border-5 border-light">
         <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus et aliquid laboriosam quasi sunt asperiores ipsam unde omnis possimus quam officia obcaecati quisquam vel nihil culpa aperiam facere cupiditate, eligendi ex. Reiciendis numquam illo iste dolores error perspiciatis quod dignissimos, est quia labore. Itaque odit pariatur debitis qui ipsa!</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus et aliquid laboriosam quasi sunt asperiores ipsam unde omnis possimus quam officia obcaecati quisquam vel nihil culpa aperiam facere cupiditate, eligendi ex. Reiciendis numquam illo iste dolores error perspiciatis quod dignissimos, est quia labore. Itaque odit pariatur debitis qui ipsa!</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus et aliquid laboriosam quasi sunt asperiores ipsam unde omnis possimus quam officia obcaecati quisquam vel nihil culpa aperiam facere cupiditate, eligendi ex. Reiciendis numquam illo iste dolores error perspiciatis quod dignissimos, est quia labore. Itaque odit pariatur debitis qui ipsa!</p>
</div>
        <div class="col-md-6 py-5">
        <form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Full Name</label>
    <input type="text" class="form-control" placeholder="Enter name" name="Name" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Phone</label>
    <input type="text" class="form-control" placeholder="Enter phone number" name="Phone" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Email</label>
    <input type="email" class="form-control" placeholder="Enter email" name="Email" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Where To</label>
    <input type="text" class="form-control" placeholder="Enter destination" name="Where_To" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">How Many</label>
    <input type="text" class="form-control" placeholder="Enter adult number" name="How_Many" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Room</label>
    <input type="text" class="form-control" placeholder="Enter room number" name="Room" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Departure</label>
    <input type="date" class="form-control" name="Departure" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold">Arrival</label>
    <input type="date" class="form-control" name="Arrival" required>
  </div>
  <button name="custompackagebtn" type="submit" class="btn btn-primary px-3 fs-5">Add Package</button>
</form>
</div>

      </div>
    </div>









    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>

<?php
include('footer.php');
?>