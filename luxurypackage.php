<?php
include 'header.php';
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
    <title>eTourism</title>
</head>

<body>
    
    <!-- Card -->
    <div class="container">
        <div class="row">
    <?php
    include 'config.php';
    $sqlQuery = "SELECT * FROM `producttable`";
    $query = mysqli_query($con, $sqlQuery);
    while($row = mysqli_fetch_array($query)){
        $checkpage = $row['packageCategory'];
        if($checkpage === 'Luxury Packages'){
        echo "
        <div class='col-sm-12 col-md-4 m-auto py-5 text-center'>
        <div class='card m-auto' style='width: 18rem;'>
  <img src='admin/$row[packageImage]' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title' style='font-size:25px;'>$row[packageName]</h5>
    <p class='card-text py-2' style='font-size:18px;'>Rs: $row[packagePrice]/=</p>
    <a href='admin/order.php? Id=$row[Id]' class = 'btn btn-primary text-white px-3'>Purchase</a>
    <a href='packagedetail.php? Id=$row[Id]' class = 'btn btn-primary text-white px-4'>Details</a>
  </div>
</div>
</div>
        ";
    }
}
    ?>

        </div>
    </div>




    
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    
</body>

</html>

<?php
include 'footer.php';
?>