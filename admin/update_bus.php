<?php
session_start();
if(!$_SESSION['admin_name']){
    header("location:login.php");
}
?> 

<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
  
  
  <?php

include 'config.php';
$id = $_GET['id'];
$sqlQuery = "SELECT * FROM `bus` WHERE id = $id";
$query = mysqli_query($con,$sqlQuery);
$data = mysqli_fetch_array($query);


if(isset($_POST['update'])){
    $id = $_GET['id'];
    $bus_name = $_POST['bus_name'];
    $bus_from = $_POST['bus_from'];
    $bus_to = $_POST['bus_to'];
    $bus_price = $_POST['bus_price'];

    $sqlQuery = "UPDATE `bus` SET `bus_name`='$bus_name',`bus_from`='$bus_from',`bus_to`='$bus_to',`bus_price`='$bus_price' WHERE id = $id";
  
    $query = mysqli_query($con,$sqlQuery);

    if($query){
    echo "
    <script>
    alert('Updated Successfully')
    window.location.href='view_bus.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Try again')
    window.location.href='view_bus.php';
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
    <title>Update Bus Details</title>
</head>
<body>


    <div class="container-fluid">
      <div class="row">
        <form action=" " method="post" enctype="multipart/form-data">
  <h1 class="text-center text-warning fw-bold py-5">Update Bus Details</h1>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Bus</label>
    <input type="text" value="<?php echo $data['bus_name']?>" class="form-control py-3" placeholder="Bus" name="bus_name">
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">From</label>
    <input type="text" value="<?php echo $data['bus_from']?>" class="form-control" placeholder="From" name="bus_from">
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">To</label>
    <input type="text" value="<?php echo $data['bus_to']?>" class="form-control" placeholder="To" name="bus_to">
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Price</label>
    <input type="text" value="<?php echo $data['bus_price']?>" class="form-control" placeholder="Price" name="bus_price">
  </div>
  <input type="hidden" value="<?php echo $data['id']?>" name="id">
  <button name="update" type="submit" class="btn btn-primary px-5 fs-5">Update</button>
</form>
      </div>
    </div>





    <script src="../js/bootstrap.js"></script>
</body>
</html>

<?php
include('includes/scripts.php'); 
include('includes/footer.php'); 
?>