<?php

include('config.php');

if(isset($_POST['min_price']) && isset($_POST['max_price'])){
    $min_price = $_POST['min_price'];
    $max_price = $_POST['max_price'];
    $sql = "SELECT * FROM producttable WHERE packagePrice BETWEEN {$min_price} AND {$max_price}";
    $result = mysqli_query($con,$sql);
    $output = '';

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $output.="
            <div class='col-sm-6 col-md-4 col-lg-4 py-5'>
            <div class='card text-center'>
                <img src='admin/$row[packageImage]' class='card-img-top'>
                <div class='card-body'>
                <h5 class='card-title fw-bold' style='font-size:25px;'>$row[packageName]</h5>
                <p class='card-text py-2' style='font-size:18px;'>Rs: $row[packagePrice]/=</p>
                <a href='admin/order.php? Id=$row[Id]' class = 'btn btn-primary text-white px-4'>Purchase</a>
                <a href='packagedetail.php? Id=$row[Id]' class = 'btn btn-primary text-white px-5'>Details</a>
            </div>
            </div>
            </div>
        ";
        }
    }
    else{
        $output="<h2>No Record Found.</h2>";
    }
    echo $output;
}


?>
