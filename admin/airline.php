<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['airline_btn'])){
  include 'config.php';
  $airline_name = $_POST['airline_name'];
  $airline_from = $_POST['airline_from'];
  $airline_to = $_POST['airline_to'];
  $airline_price= $_POST['airline_price'];
  $sqlQuery = "INSERT INTO `airline`(`airline_name`, `airline_from`, `airline_to`, `airline_price`) VALUES ('$airline_name','$airline_from','$airline_to', '$airline_price')";
  $query = mysqli_query($con,$sqlQuery);
  if($query){
    echo "
    <script>
    alert('Added Successfully')
    window.location.href='view_airline.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Try again')
    window.location.href='airline.php';
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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../js/app.js">
    <title>Airline Booking</title>
</head>
<body>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Airline</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="" method="post" enctype="multipart/form-data" class="col-md-10">
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Airline</label>
    <input type="text" class="form-control py-3" name="airline_name" placeholder="Airline Name" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">From</label>
    <input type="text" class="form-control" name="airline_from" placeholder="From" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">To</label>
    <input type="text" class="form-control" name="airline_to" placeholder="To" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Price</label>
    <input type="text" class="form-control" name="airline_price" placeholder="Price" required>
  </div>
  <button name="airline_btn" type="submit" class="btn btn-primary px-5 fs-5">Upload</button>
</form>
    </div>
  </div>
</div>
</div>



    <script src="../js/bootstrap.js"></script>
</body>
</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>