<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<?php

if(isset($_POST['registerbtn'])){

  include 'config.php';

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sqlQuery = "INSERT INTO `admin`(`admin_name`, `email`, `admin_password`) VALUES ('$username','$email','$password');";

  $query = mysqli_query($con,$sqlQuery);

  if($query)
  {
    echo "
    <script>
    alert('Admin Added Successfully')
    window.location.href='index.php';
    </script>
    ";
  }
  else 
  {
    echo "
    <script>
    alert('Admin is Not Added')
    window.location.href='register.php';
    </script>
    ";
  }

  exit();
}
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn text-white" style="background-color:#0047AB;">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Profile 
            <button type="button" class="btn text-white" style="background-color:#0047AB;" data-toggle="modal" data-target="#addadminprofile">
              Add New Admin 
            </button>
    </h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
     
        <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `admin`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[Id]</td>
        <td>$row[admin_name]</td>
        <td>$row[email]</td>
        <td>$row[admin_password]</td>
        <td><a href='deleteAdmin.php? Id=$row[Id]' class = 'btn btn-danger text-white'>Delete</a</td>
        </tr>
        ";
        ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>