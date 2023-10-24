<?php

include 'config.php';

$id = $_GET['id'];

$sqlQuery = "DELETE FROM `airline` WHERE id = $id";

$query = mysqli_query($con,$sqlQuery);

header('location:view_airline.php');

?>