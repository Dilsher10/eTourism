<?php
include('fetch_data.php');
?>

<?php
require 'config.php';
?>

<?php
include('header.php');
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
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <title>Packages</title>

</head>

<body>


<!-- Filter -->

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <h4 class="mt-5 fw-bold">Filter Packages</h4>
            <hr>
            <div class="price-range-block">
                    <h5 class="py-3 fw-bold">Price</h5>
                    <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                    <div style="margin:30px auto; text-align:center">
                    <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field text-center" />
                    <input type="number" min=0 max="500000" oninput="validity.valid||(value='500000');" id="max_price" class="price-range-field text-center" />
                    </div>
                </div>



            <!-- <h5 class="fw-bold">Select Category</h5>
            <ul class="list-group">
                <?php
                   $sql = "SELECT DISTINCT packageCategory FROM producttable";
                   $result = $con->query($sql);
                   while($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input package_check" value="<?= $row['packageCategory'];?>" id="package"><?= $row['packageCategory']; ?>
                        </label>
                    </div>
                </li>
                <?php } ?>
            </ul> -->
        </div>

        <div class="col-sm-9">
            <h3 class="text-center fw-bold mt-5" id="textChange">All Packages</h3>
            <div id="searchResults" class="search-results-block">
                <div class="row" id="result">
                <?php
                include 'config.php';
                
                $sqlQuery = "SELECT * FROM `vender_packages`";
                $query = mysqli_query($con, $sqlQuery);
                while($row = mysqli_fetch_array($query)){
                    echo "
                    <div class='col-sm-6 col-md-4 col-lg-4 py-5'>
                    <div class='card text-center'>
                        <img src='admin/$row[packageImage]' class='card-img-top' width='500' height='250'>
                        <div class='card-body'>
                        <h5 class='card-title fw-bold' style='font-size:25px;'>$row[packageName]</h5>
                        <p class='card-text py-2' style='font-size:18px;'>Rs: $row[packagePrice]/=</p>
                        <a href='vender_order.php? Id=$row[Id]' class = 'btn text-white px-4' style='background-color: darkorange;'>Purchase</a>
                        <a href='vender_package_detail.php? Id=$row[Id]' class = 'btn text-white px-5' style='background-color: darkorange;'>Details</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
                
                
                $sqlQuery = "SELECT * FROM `producttable`";
                $query = mysqli_query($con, $sqlQuery);
                while($row = mysqli_fetch_array($query)){
                    echo "
                    <div class='col-sm-6 col-md-4 col-lg-4 py-5'>
                    <div class='card text-center'>
                        <img src='admin/$row[packageImage]' class='card-img-top' width='500' height='250'>
                        <div class='card-body'>
                        <h5 class='card-title fw-bold' style='font-size:25px;'>$row[packageName]</h5>
                        <p class='card-text py-2' style='font-size:18px;'>Rs: $row[packagePrice]/=</p>
                        <a href='order.php? Id=$row[Id]' class = 'btn text-white px-4' style='background-color: darkorange;'>Purchase</a>
                        <a href='packagedetail.php? Id=$row[Id]' class = 'btn text-white px-5' style='background-color: darkorange;'>Details</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
               
                ?>
                </div>
            </div>
        </div>


       

    </div>
</div>

    


    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>

    <!-- Filter Slider -->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function(){
             function filterProducts(){
                 $("#searchResults").html("<p>Loading...</p>");
                 var min_price = $("#min_price").val();
                 var max_price = $("#max_price").val();
                $.ajax({
                    url:"fetch_data.php",
                    type:"POST",
                    data:{min_price:min_price,max_price:max_price},
                    success:function(data){
                        $("#searchResults").html(data);
                    }
                });
             }
             $("#min_price, #max_price").on('keyup',function(){
                filterProducts();
             });
            $("#slider-range").slider({
                range: true,
                orientation: "horizontal",
                min: 0,
                max: 500000,
                values: [0, 500000],
                step: 100,
                slide: function (event, ui) {
                    if (ui.values[0] == ui.values[1]) {
                        return false;
                        }
                        $("#min_price").val(ui.values[0]);
                        $("#max_price").val(ui.values[1]);

                        filterProducts();
                        }
                        });

                        $("#min_price").val($("#slider-range").slider("values", 0));
                        $("#max_price").val($("#slider-range").slider("values", 1));             
         });
     </script> 

</body>

</html>

<?php
include 'footer.php';
?>