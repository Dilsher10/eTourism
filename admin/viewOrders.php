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

<!-- Fetch Data -->
<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Customer Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date</th>
        <th>Package Name</th>
        <th>Price</th>
        <th>Category</th>
          </tr>
        </thead>
        <tbody>
     
        <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `ordertable`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[customerName]</td>
        <td>$row[customerPhone]</td>
        <td>$row[customerEmail]</td>
        <td>$row[departureDate]</td>
        <td>$row[packageName]</td>
        <td>$row[packagePrice]</td>
        <td>$row[packageCategory]</td>
        </tr>
        ";
        ?>
        
                <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `vender_orders`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[customerName]</td>
        <td>$row[customerPhone]</td>
        <td>$row[customerEmail]</td>
        <td>$row[departureDate]</td>
        <td>$row[packageName]</td>
        <td>$row[packagePrice]</td>
        <td>$row[packageCategory]</td>
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