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

if(isset($_POST['upload'])){

  include 'config.php';

  $packageName = $_POST['packageName'];
  $packagePrice = $_POST['packagePrice'];
  $packageImage = $_FILES['packageImage'];
  $imageLoc = $_FILES['packageImage']['tmp_name'];
  $imageName = $_FILES['packageImage']['name'];
      $imageDes = "../Uploadimage/".$imageName;
      move_uploaded_file($imageLoc,"../Uploadimage/".$imageName);

  $packageCategory = $_POST['packageCategory'];
  $packageDescription = $_POST['packageDescription'];  
  
  $sqlQuery = "INSERT INTO `producttable`(`packageName`, `packagePrice`, `packageImage`, `packageCategory`, `packageDescription`) VALUES ('$packageName','$packagePrice','$imageDes','$packageCategory','$packageDescription');";

  $query = mysqli_query($con,$sqlQuery);
  
  if($query){
    echo "
    <script>
    alert('Added Successfully')
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
    <title>Add Package</title>
</head>
<body>
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Package</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="" method="post" enctype="multipart/form-data" class="col-md-10">
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Package Name</label>
    <input type="text" class="form-control py-3" placeholder="Enter Product Name" name="packageName" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Package Price</label>
    <input type="text" class="form-control" placeholder="Enter Product Price" name="packagePrice" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Package Image</label>
    <input type="file" class="form-control" name="packageImage" required>
  </div>
  <div class="mb-3">
    <label  class="form-label fs-5 fw-bold py-2">Select Package Category</label>
    <select class="form-select" name="packageCategory">
      <option value="Luxury Packages">Luxury Package</option>
      <option value="Economic Packages">Economic Package</option>
      <option value="Hotel Packages">Hotel Package</option>
      <option value="Car Packages">Car Package</option>
      <option value="Farm Packages">Farm Package</option>
    </select>
  </div>
  <div class="mb-3">
    <textarea name="packageDescription" id="" cols="100" rows="10" placeholder="Package Description..." required></textarea>
  </div>
  <button name="upload" type="submit" class="btn btn-primary px-5 fs-5">Upload</button>
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