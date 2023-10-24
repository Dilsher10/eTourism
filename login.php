<?php

include 'config.php';


if(isset($_POST['user_login'])){

    include 'config.php';
    
    $username = $_POST['username'];
    $userpassword = $_POST['userpassword'];
    
    $sqlQuery = "SELECT * FROM `user` WHERE username = '$username' AND userpassword = '$userpassword'";
    
    $query = mysqli_query($con,$sqlQuery);
    
    session_start();
    
    if(mysqli_num_rows($query)){
        $_SESSION['username'] = $username;
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

<?php

if(isset($_POST['user_register'])){
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $usernumber = $_POST['usernumber'];
    $userpassword = $_POST['userpassword'];

    $sqlQuery = "INSERT INTO `user`(`username`, `useremail`, `userphone`, `userpassword`) VALUES ('$username','$useremail','$usernumber','$userpassword');";
    $Dup_Username = mysqli_query($con,"SELECT * FROM `user` WHERE username = '$username'");
    $Dup_Email = mysqli_query($con,"SELECT * FROM `user` WHERE useremail = '$useremail'");

    if(mysqli_num_rows($Dup_Username)){
        echo "
        <script>
        alert('username already used');
        window.location.href='login.php'
        </script>
        ";
    }
    if(mysqli_num_rows($Dup_Email)){
        echo "
        <script>
        alert('Email already used');
        window.location.href='login.php'
        </script>
        ";
    }
    else{
        $query = mysqli_query($con,$sqlQuery);
        echo "
        <script>
        alert('Register successfully');
        window.location.href='login.php'
        </script>
        ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
.hero
{
width:100%;
height:100%;
position:absolute;
background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/m.jpg);
background-size:cover;
background-position:center;
}
.form-box
{
width:380px;
height:500px;
margin:6% auto;
background:#fff;
position:relative;
padding:5px;
overflow:hidden;
}
.button-box
{
width:220px;
margin:35px auto;
box-shadow:0 0 20px 9px #ff61241f;
border-radius:30px;
position:relative;
}
.toggle-btn
{
padding:10px 30px;
border:0;
background:transparent;
cursor:pointer;
position:relative;
outline:none;
}
#btn
{
top:0;
left:0;
position:absolute;
width:110px;
height:100%;
background:linear-gradient(to right, #0000FF, #728FCE);
border-radius:30px;
}
.social-icons
{
margin:30px auto;
text-align:center;
}
.social-icons img
{
width:30px;
margin:0 12px;
border-radius:50%;
cursor:pointer;
}
.input-group
{
top:180px;
position:absolute;
width:280px;
}
.input-field
{
width:100%;
padding:10px 0;
margin:5px 0;
border-left:0;
border-right:0;
border-top:0;
border-bottom:1px solid #999;
outline:none;
background:transparent;
}
.submit-btn
{
width:85%;
padding:10px 30px;
margin:auto;
border-radius:30px;
border:0;
cursor:pointer;
background:linear-gradient(to right, #0000FF, #728FCE);
display:block;
outline:none;
}
.checkbox
{
margin:30px 10px 30px 0;
}
span
{
color:#777;
font-size:12px;
bottom:68px;
position:absolute;
}
#login
{
left:50px;
}
#register
{
left:450px;
}
    </style>
</head>
<body>

<!-- Login -->
<div class="hero">
     <div class="form-box">
          <div class="button-box">
               <div id="btn"></div>
               <button type="button" class="toggle-btn" onclick="login()">Login</button>
               <button type="button" class="toggle-btn" onclick="register()">Register</button>
          </div>

          <div class="social-icons">
          <img src="images/facebook.png">
          <img src="images/instagram.png">
          <img src="images/twitter.png">
     </div>

     <form id="login" class="input-group" action="login.php" method="POST">
     <input type="text" placeholder="Enter Username" class="input-field" name="username" required>
     <input type="password" class="input-field" placeholder="Enter Password" name="userpassword" required>
     <input type="checkbox" class="checkbox" required><span>Remember Password</span>
     <button type="submit" class="submit-btn" name="user_login">Log in</button>
     </form>

     <form id="register" class="input-group" action="" method="POST">
     <input type="text" placeholder="Username" class="input-field" name="username" required>
     <input type="email" placeholder="Email" class="input-field" name="useremail" required>
     <input type="text" placeholder="Phone" class="input-field" name="usernumber" required>
     <input type="password" class="input-field" placeholder="Password" name="userpassword" required>
     <input type="checkbox" class="checkbox" required><span>I agree to the terms and conditions</span>
     <button type="submit" class="submit-btn" name="user_register">Register</button>
     </form>
     </div>
     
</div>

<script>
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register(){
x.style.left = "-400px";
y.style.left = "50px";
z.style.left = "110px";
}
function login(){
x.style.left = "50px";
y.style.left = "450px";
z.style.left = "0px";
}
</script>
</body>
</html>