<?php

include 'config.php';

$Id = $_GET['Id'];

$sqlQuery = "DELETE FROM `vender_packages` WHERE Id = $Id";

$query = mysqli_query($con,$sqlQuery);

header('location:viewPackages.php');

?>

