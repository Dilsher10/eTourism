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
    <h6 class="m-0 font-weight-bold text-primary">Custom Orders</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Where To</th>
        <th>How Many</th>
        <th>Room</th>
        <th>Departure</th>
        <th>Arrival</th>
          </tr>
        </thead>
        <tbody>
     
        <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `customorders`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[Id]</td>
        <td>$row[Name]</td>
        <td>$row[Phone]</td>
        <td>$row[Email]</td>
        <td>$row[Where_To]</td>
        <td>$row[How_Many]</td>
        <td>$row[Room]</td>
        <td>$row[Departure]</td>
        <td>$row[Arrival]</td>
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