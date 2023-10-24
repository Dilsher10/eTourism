<?php

include 'config.php';

$Id = $_GET['Id'];

$sqlQuery = "DELETE FROM `admin` WHERE Id = $Id";

$query = mysqli_query($con,$sqlQuery);

header('location:register.php');

?>