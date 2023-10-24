<?php
session_start();
include('includes/header.php'); 
include 'config.php';
?>




<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                <?php
                include 'config.php';

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="logincode.php" method="POST">

                <div class="form-group">
                <label> Username </label>
                <input type="text" name="admin_name" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="admin_password" class="form-control" placeholder="Enter Password" required>
            </div>
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include('includes/scripts.php'); 
?>