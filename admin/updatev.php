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
$Id = $_GET['Id'];
$sqlQuery = "SELECT * FROM `vender_packages` WHERE Id = $Id";
$query = mysqli_query($con,$sqlQuery);
$data = mysqli_fetch_array($query);


if(isset($_POST['update'])){
    $Id = $_GET['Id'];
    $packageName = $_POST['packageName'];
    $packagePrice = $_POST['packagePrice'];
    $packageImage = $_FILES['packageImage'];
    $imageLoc = $_FILES['packageImage']['tmp_name'];
    $imageName = $_FILES['packageImage']['name'];
       $imageDes = "../Uploadimage/".$imageName;
    move_uploaded_file($imageLoc,"../Uploadimage/".$imageName);
    $packageCategory = $_POST['packageCategory'];   
  
    $sqlQuery = "UPDATE `vender_packages` SET `packageName`='$packageName',`packagePrice`='$packagePrice',`packageImage`='$imageDes',`packageCategory`='$packageCategory' WHERE Id = $Id";
  
    $query = mysqli_query($con,$sqlQuery);

    if($query){
    echo "
    <script>
    alert('Updated Successfully')
    window.location.href='viewPackages.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Try again')
    window.location.href='login.php';
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
    <title>Update Package</title>
</head>
<body>


    <div class="container-fluid">
      <div class="row">
        <form action=" " method="post" enctype="multipart/form-data">
  <h1 class="text-center text-warning fw-bold py-5">UPDATE PACKAGE</h1>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Package Name</label>
    <input type="text" value="<?php echo $data['packageName']?>" class="form-control py-3" placeholder="Enter Product Name" name="packageName">
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Package Price</label>
    <input type="text" value="<?php echo $data['packagePrice']?>" class="form-control" placeholder="Enter Product Price" name="packagePrice">
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Package Image</label>
    <input type="file" class="form-control" name="packageImage"></br>
    <img src="<?php echo $data['packageImage']?>" alt="" width="200">
  </div>
  <div class="mb-3">
    <label class="form-label fs-5 fw-bold py-2">Select Package Category</label>
    <select class="form-select" name="packageCategory">
      <option value="luxuryPackages">Luxury Package</option>
      <option value="economicPackages">Economic Package</option>
      <option value="hotelPackages">Hotel Package</option>
      <option value="carPackages">Car Package</option>
    </select>
  </div>
  <input type="hidden" value="<?php echo $data['Id']?>" name="Id">
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