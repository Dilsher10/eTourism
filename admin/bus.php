<?php
include('includes/header.php'); 
include('includes/navbar.php'); 

if(isset($_POST['bus_btn'])){
  include 'config.php';
  $bus_name = $_POST['bus_name'];
  $bus_from = $_POST['bus_from'];
  $bus_to = $_POST['bus_to'];
  $bus_price= $_POST['bus_price'];
  $sqlQuery = "INSERT INTO `bus`(`bus_name`, `bus_from`, `bus_to`, `bus_price`) VALUES ('$bus_name','$bus_from','$bus_to', '$bus_price')";
  $query = mysqli_query($con,$sqlQuery);
  if($query){
    echo "
    <script>
    alert('Added Successfully')
    window.location.href='view_bus.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Try again')
    window.location.href='bus.php';
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
    <title>Bus Booking</title>
</head>
<body>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Bus</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="" method="post" enctype="multipart/form-data" class="col-md-10">
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Airline</label>
    <input type="text" class="form-control py-3" name="bus_name" placeholder="Bus" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">From</label>
    <input type="text" class="form-control" name="bus_from" placeholder="From" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">To</label>
    <input type="text" class="form-control" name="bus_to" placeholder="To" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Price</label>
    <input type="text" class="form-control" name="bus_price" placeholder="Price" required>
  </div>
  <button name="bus_btn" type="submit" class="btn btn-primary px-5 fs-5">Upload</button>
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