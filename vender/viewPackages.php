<?php
session_start();
if(!$_SESSION['vender_name']){
    header("location:login.php");
}
?> 

<?php
include 'config.php';
include('includes/header.php'); 
include('includes/navbar.php'); 
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
    <title>View Packages</title>
</head>
<body>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">All Packages</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Category</th>
        <th>Delete</th>
        <th>Update</th>
          </tr>
        </thead>
        <tbody>
     
        <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `vender_packages`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[packageName]</td>
        <td>$row[packagePrice]</td>
        <td><img src='./$row[packageImage]' width='200' height='100'></td>
        <td>$row[packageCategory]</td>
        <td><a href='delete.php? Id=$row[Id]' class = 'btn btn-danger text-white'>Delete</a</td>
        <td><a href='update.php? Id=$row[Id]' class = 'btn btn-warning text-white'>Update</a</td>
        </tr>
        ";
        ?>
        </tbody>
      </table>

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