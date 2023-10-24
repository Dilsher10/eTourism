<?php

if(isset($_POST['login_btn'])){

include 'config.php';

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];

$sqlQuery = "SELECT * FROM `admin` WHERE admin_name = '$admin_name' AND admin_password = '$admin_password'";

$query = mysqli_query($con,$sqlQuery);

session_start();

if(mysqli_num_rows($query)){
    $_SESSION['admin_name'] = $admin_name;
    echo "
    <script>
    alert('Login Successfully')
    window.location.href='index.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Invalid Input')
    window.location.href='login.php';
    </script>
    ";
}
}
?>
