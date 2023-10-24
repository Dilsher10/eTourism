<?php

include 'config.php';

$id = $_GET['id'];

$sqlQuery = "DELETE FROM `bus` WHERE id = $id";

$query = mysqli_query($con,$sqlQuery);

header('location:view_bus.php');

?>