<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>E-Tourism</title>
</head>

<body>

<!-- Nav Bar -->

<nav class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" atl="logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="packages.php">PACKAGES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customPackage.php">CUSTOM PACKAGE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                                <?php
                                if(isset($_SESSION['username'])){
                                    echo "
                                    <a class='nav-link' href='logout.php'>LOGOUT</a>
                                    ";
                                }
                                else{
                                    echo "
                                    <a class='nav-link' href='login.php'>LOGIN</a>
                                    ";
                                }
                                
                                ?>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
    
    



<!--Header Categories-->
    
    <div class="mainCard slider brand-carousel owl-carousel">
      <div class="card1">
        <a href="tourpackages.php"><i class="fas fa-store-alt py-2 text-dark"> Tour</i></a>
      </div>
      <div class="card2">
          <a href="hotelpackage.php"><i class="fas fa-building py-2 text-dark"> Hotel</i></a>
      </div>
      <div class="card3">
          <a href="carpackage.php"><i class="fas fa-car-side py-2 text-dark"> Car</i></a>
      </div>
      <div class="card4">
           <a href="farmpackage.php"><i class="fas fa-cannabis py-2 text-dark"> Farm</i></a>
      </div>
      <div class="card5">
           <a href="farmpackage.php"><i class="fas fa-archway py-2 text-dark"> Hall</i></a>
      </div>
    </div>

    


    <!-- Header -->
    
    
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p>
                                <!-- Airline Button -->
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Airline Details
                                </button>
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#BusModal">
                                    Bus Details
                                </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    
    
     <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>