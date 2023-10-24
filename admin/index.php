<?php
session_start();
if(!$_SESSION['admin_name']){
    header("location:login.php");
}
?> 

<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

 
  <div class="row">
    <!-- Admins -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-5">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-primary text-uppercase mb-1">Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                include 'config.php';
                $sqlQuery = "SELECT id FROM admin ORDER by id";
                $query = mysqli_query($con,$sqlQuery);
                $row = mysqli_num_rows($query);
                echo "<h1>$row</h1>"
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Users -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-5">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-success text-uppercase mb-1">Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                include 'config.php';
                $sqlQuery = "SELECT id FROM user ORDER by id";
                $query = mysqli_query($con,$sqlQuery);
                $row = mysqli_num_rows($query);
                echo "<h1>$row</h1>"
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Packages -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-5">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-info text-uppercase mb-1">Packages</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <?php
                include 'config.php';
                $sqlQuery = "SELECT id FROM producttable ORDER by id";
                $query = mysqli_query($con,$sqlQuery);
                $row = mysqli_num_rows($query);
                echo "<h1>$row</h1>"
                ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Orders -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-5">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-warning text-uppercase mb-1">Orders</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                include 'config.php';
                $sqlQuery = "SELECT id FROM ordertable ORDER by id";
                $query = mysqli_query($con,$sqlQuery);
                $row = mysqli_num_rows($query);
                echo "<h1>$row</h1>"
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Custom Orders -->
     <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-5">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-primary text-uppercase mb-1">Custom Orders</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                include 'config.php';
                $sqlQuery = "SELECT id FROM customorders ORDER by id";
                $query = mysqli_query($con,$sqlQuery);
                $row = mysqli_num_rows($query);
                echo "<h1>$row</h1>"
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Categories -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-5">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="font-weight-bold text-success text-uppercase mb-1">Categories</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                include 'config.php';
                $sqlQuery = "SELECT DISTINCT packageCategory FROM producttable";
                $query = mysqli_query($con,$sqlQuery);
                $row = mysqli_num_rows($query);
                echo "<h1>$row</h1>"
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  



  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>