<?php
session_start();
include 'header.php';
?>

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
    
    
     <!--All Packages-->
    
    <div class="container Packages py-5">
        <h1 class="fw-bold text-center">OUR PACKAGES</h1>
        <div class="row">
            <?php
                include 'config.php';
                
                $sqlQuery = "SELECT * FROM `vender_packages` ";
                $query = mysqli_query($con, $sqlQuery);
                while($row = mysqli_fetch_array($query)){
                    echo "
                    <div class='col-sm-6 col-md-3 col-lg-3 py-5'>
                    <div class='card text-center'>
                        <img src='admin/$row[packageImage]' class='card-img-top' width='500' height='150'>
                        <div class='card-body'>
                        <h5 class='card-title'>$row[packageName]</h5>
                        <p class='card-text py-2' style='font-size:18px;'>Rs: $row[packagePrice]/=</p>
                        <a href='vender_order.php? Id=$row[Id]' class = 'btn'>Purchase</a>
                        <a href='vender_package_detail.php? Id=$row[Id]' class = 'btn'>Details</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
                
                $sqlQuery = "SELECT * FROM `producttable` ";
                $query = mysqli_query($con, $sqlQuery);
                while($row = mysqli_fetch_array($query)){
                    echo "
                    <div class='col-sm-6 col-md-3 col-lg-3 py-5'>
                    <div class='card text-center'>
                        <img src='admin/$row[packageImage]' class='card-img-top' width='500' height='150'>
                        <div class='card-body'>
                        <h5 class='card-title fw-bold' style='font-size:25px;'>$row[packageName]</h5>
                        <p class='card-text py-2' style='font-size:18px;'>Rs: $row[packagePrice]/=</p>
                        <a href='order.php? Id=$row[Id]' class = 'btn'>Purchase</a>
                        <a href='packagedetail.php? Id=$row[Id]' class = 'btn'>Details</a>
                    </div>
                    </div>
                    </div>
                    ";
                }
                ?>
        </div>
    </div>


    <!-- About Section -->

    <div class="container aboutSec mb-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="images/slide1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1>Tourism</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint reprehenderit inventore molestias earum similique rerum iste tenetur, soluta nam voluptatem illum dolores officiis, nesciunt laboriosam? Enim animi hic sit quis! Vero quod cupiditate animi mollitia eveniet. Est culpa illum minus, numquam enim laudantium temporibus nemo! Repudiandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint reprehenderit inventore molestias earum similique rerum iste tenetur, soluta nam voluptatem illum dolores officiis.</p>
                <a href="aboutus.php" class="btn">About Us</a>
            </div>
        </div>
    </div>


    <!-- About Section -->

    <div class="container aboutSec mb-3">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h1>Amazing Locations</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint reprehenderit inventore molestias earum similique rerum iste tenetur, soluta nam voluptatem illum dolores officiis, nesciunt laboriosam? Enim animi hic sit quis! Vero quod cupiditate animi mollitia eveniet. Est culpa illum minus, numquam enim laudantium temporibus nemo! Repudiandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint reprehenderit inventore molestias earum similique rerum iste tenetur, soluta nam voluptatem illum dolores officiis.</p>
                <a href="contactus.php" class="btn">Contact Us</a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="images/slide2.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

     <!-- MOST POPULAR TOURS -->

    <section id="team">
        <h1 class="fw-bold text-center">POPULAR TOURS</h1>
        <div class="testimonial-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 py-5">
                        <div class="team-slider owl-carousel">
                            <div class="single-box">
                                <div class="img-area"><img alt="" class="img-fluid move-animation"
                                        src="images/p-1.jpg" width="360" height="240"></div>
                                <div class="info-area py-3">
                                    <h4>Package Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                        href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="single-box">
                                <div class="img-area"><img alt="" class="img-fluid move-animation"
                                        src="images/p-2.jpg" width="360" height="240"></div>
                                <div class="info-area py-3">
                                    <h4>Package Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                        href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="single-box">
                                <div class="img-area"><img alt="" class="img-fluid move-animation"
                                        src="images/p-3.jpg" width="360" height="240" style="height: 240px;"></div>
                                <div class="info-area py-3">
                                    <h4>Package Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                        href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="single-box">
                                <div class="img-area"><img alt="" class="img-fluid move-animation"
                                        src="images/p-4.jpg" width="360" height="240"></div>
                                <div class="info-area py-3">
                                    <h4>Package Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                        href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="single-box">
                                <div class="img-area"><img alt="" class="img-fluid move-animation"
                                        src="images/p-5.jpg" width="360" height="240"></div>
                                <div class="info-area py-3">
                                    <h4>Package Name</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a
                                        href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
     <!--Fixed Box-->
    
    <div class="container-fluid py-5">
        <div class="row">
            <div class="fixBox">
                <h1>ABOUT US</h1>
                <p class="py-4">We spoke to the common people, we observed their challenges of obtaining looks and health which they desire Amore filtered the most common problems that men and women face and we ended up creating products which could cater all their struggles. We spoke to the common people, we observed their challenges of obtaining looks and health which they desire Amore filtered the most common problems that men and women face and we ended up creating products which could cater all their struggles.</p>
                <button type="button" class="btn">More About Us</button>
            </div>
        </div>
    </div>
    

    <!-- Services -->

    <div class="container ServiceSec">
        <h1 class="fw-bold text-center py-5">OUR SERVICES</h1>
        <div class="row">
            <div class="card service col-md-4 col-sm-12 text-center">
                <i class="fas fa-hotel"></i>
                <h3 class="py-2">Hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima consequatur recusandae,
                    voluptatum veritatis culpa.</p>
            </div>
            <div class="card service col-md-4 col-sm-12 text-center">
                <i class="fas fa-utensils"></i>
                <h3 class="py-2">Foods</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima consequatur recusandae,
                    voluptatum veritatis culpa.</p>
            </div>
            <div class="card service col-md-4 col-sm-12 text-center">
                <i class="fas fa-hand-holding-medical"></i>
                <h3 class="py-2">Safty</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima consequatur recusandae,
                    voluptatum veritatis culpa.</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="card service col-md-4 col-sm-12 text-center">
                <i class="fas fa-globe-asia"></i>
                <h3 class="py-2">Around World</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima consequatur recusandae,
                    voluptatum veritatis culpa.</p>
            </div>
            <div class="card service col-md-4 col-sm-12 text-center">
                <i class="fas fa-plane"></i>
                <h3 class="py-2">Fatest Travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima consequatur recusandae,
                    voluptatum veritatis culpa.</p>
            </div>
            <div class="card service col-md-4 col-sm-12 text-center">
                <i class="fas fa-biking"></i>
                <h3 class="py-2">Adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis minima consequatur recusandae,
                    voluptatum veritatis culpa.</p>
            </div>
        </div>
    </div>

    <!-- Gallery -->

    <section class="Gallery">
    <div class="container pb-5">
        <h1 class="fw-bold text-center py-5">OUR GALLERY</h1>
        <div class="row">
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/p-1.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row py-5">
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-4.jpg" alt="" class="img-fluid">
            </div>
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-5.jpg" alt="" class="img-fluid">
            </div>
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-6.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-7.jpg" alt="" class="img-fluid">
            </div>
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-8.jpg" alt="" class="img-fluid">
            </div>
            <div class="Gallery col-md-4 col-sm-12">
                <img src="images/g-9.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    </section>    

     <!-- Testimonial -->

     <div class="container-lg Testimonial-sec">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2>Some Comments from Our<b> Dedicated Clients</b></h2>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Logoistic made the cutest logo for me. I am still extremely thankful for
                                            their cooperation and hard work. It has been a great experience working with
                                            them.</p>
                                    </div>
                                    <div class="media">
                                        <img src="images/t1.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Sharron White</b></div>
                                                <div class="details">Media Analyst / SkyNet</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Logos are tricky and I wanted a unique one which is why I hired them as
                                            recommended by my friend. I was highly satisfied with the great piece of
                                            work.</p>
                                    </div>
                                    <div class="media">
                                        <img src="images/t2.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Caleb Stanley</b></div>
                                                <div class="details">Web Developer / SoftBee</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>I heard of logoistic from a co-worker and decided to hire them for my event
                                            management business. The logo had to be pretty and artistic and I got
                                            exactly what I wanted.</p>
                                    </div>
                                    <div class="media">
                                        <img src="images/t3.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Haley Baker</b></div>
                                                <div class="details">Web Developer / DevCorp</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>It has been a great experience working with this company. Nice bunch of
                                            individuals that made sure I am satisfied with the logo.</p>
                                    </div>
                                    <div class="media">
                                        <img src="images/t4.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Richard Jacobs</b></div>
                                                <div class="details">Graphic Designer / MarsMedia</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>I am thankful for this service. They saved my company by rebranding the logo
                                            of my company.</p>
                                    </div>
                                    <div class="media">
                                        <img src="images/t1.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Brenda Gates </b></div>
                                                <div class="details">SEO Analyst / RealSearch</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt.
                                            Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat
                                            faucibus quam.</p>
                                    </div>
                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="images/t2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>John Williams</b></div>
                                                <div class="details">Web Designer / UniqueDesign</div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i
                                                                class="fa-solid fa-star-half-stroke"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


<!-- Airline Details -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Airline Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Airline</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Price</th>
      <th scope="col">Booking</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `airline`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[airline_name]</td>
        <td>$row[airline_from]</td>
        <td>$row[airline_to]</td>
        <td>$row[airline_price]</td>
        <td><a href='airline_booking.php? id=$row[id]' class = 'btn btn-warning text-white'>Book Now</a></td>
        </tr>
        ";
        ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>


<!-- Bus Details -->

<div class="modal fade" id="BusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bus Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Airline</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Price</th>
      <th scope="col">Booking</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'config.php';
        $sqlQuery = "SELECT * FROM `bus`";
        $query = mysqli_query($con,$sqlQuery);
        while($row = mysqli_fetch_array($query))
        echo"
        <tr>
        <td>$row[bus_name]</td>
        <td>$row[bus_from]</td>
        <td>$row[bus_to]</td>
        <td>$row[bus_price]</td>
        <td><a href='bus_booking.php? id=$row[id]' class = 'btn btn-warning text-white'>Book Now</a></td>
        </tr>
        ";
        ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>



    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>

<?php
include 'footer.php';
?>