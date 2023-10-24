<?php

if(isset($_POST['login_btn'])){

include 'config.php';

$vender_name = $_POST['username'];
$password = $_POST['password'];

$sqlQuery = "SELECT * FROM `vender` WHERE username = '$vender_name' AND password = '$password'";

$query = mysqli_query($con,$sqlQuery);

session_start();

if(mysqli_num_rows($query)){
    $_SESSION['vender_name'] = $vender_name;
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
