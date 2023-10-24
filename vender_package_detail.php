<?php
include 'header.php';
?>

<?php
include 'config.php';
$Id = $_GET['Id'];
$sqlQuery = "SELECT * FROM `vender_packages` WHERE Id = $Id";
$query = mysqli_query($con,$sqlQuery);
$data = (mysqli_fetch_array($query))
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Package Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
.DetailsCard img{
    width: 100%;
    display: block;
}
.DetailsCard .img-display{
    overflow: hidden;
}
.DetailsCard .img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}
.DetailsCard .img-select{
    display: flex;
}
.DetailsCard .img-item:hover{
    opacity: 0.8;
}
.DetailsCard .product-content{
    padding: 2rem 1rem;
}
.DetailsCard .product-title{
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.DetailsCard .product-rating{
    color: #ffc107;
}
.DetailsCard .product-rating span{
    font-weight: 600;
    color: #252525;
}
.DetailsCard .product-price{
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.DetailsCard .product-price span{
    font-weight: 400;
}
.DetailsCard .new-price span{
    color: #256eff;
}
.DetailsCard .product-detail h2{
    text-transform: capitalize;
    color: #12263a;
    padding-bottom: 0.6rem;
}
.DetailsCard .product-detail p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.DetailsCard .product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.DetailsCard .product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(images/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.DetailsCard .product-detail ul li span{
    font-weight: 400;
}
.DetailsCard .purchase-info{
    margin: 1.5rem 0;
}
.DetailsCard .purchase-info input,
.DetailsCard .purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.DetailsCard .purchase-info input{
    width: 60px;
}
.DetailsCard .purchase-info .btn{
    cursor: pointer;
    color: #fff;
}
.DetailsCard .purchase-info .btn:first-of-type{
    background: #256eff;
}
.DetailsCard .purchase-info .btn:last-of-type{
    background: #f64749;
}
.DetailsCard .purchase-info .btn:hover{
    opacity: 0.9;
}
.DetailsCard .social-links{
    display: flex;
    align-items: center;
}
.DetailsCard .social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.DetailsCard .social-links a:hover{
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px){
    .DetailsCard .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .DetailsCard{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .DetailsCard .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .DetailsCard .product-content{
        padding-top: 0;
    }
}
    </style>
    
    <!--Review-->
    
    <style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>
  </head>
  <body>


    <div class = "container DetailsCard">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "images/g-5.jpg">
              <img src = "images/g-2.jpg">
              <img src = "images/g-8.jpg">
              <img src = "images/g-4.jpg">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "images/g-5.jpg">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "images/g-2.jpg">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "images/g-8.jpg">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "images/g-4.jpg">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $data['packageName']?></h2>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "new-price">Price: <span> <?php echo $data['packagePrice']?> Rupees</span></p>
          </div>

          <div class = "product-detail">
            <h2>Description: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <ul>
              <li>Location: <span>Karachi</span></li>
              <li>Days: <span>7</span></li>
              <li>Room: <span>1</span></li>
              <li>Person: <span>2</span></li>
              <li>Photography: <span>Free</span></li>
            </ul>
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="container">
    	<h1 class="mt-5 mb-5">Reviews</h1>
    	<div class="card">
    		<div class="card-header"><?php echo $data['packageName']?> Package</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Review</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
    <div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>


<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>
    
    
    <!-- Map -->

    <div class="container mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7050661.956303704!2d69.34807160000001!3d30.3593034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1655235408737!5m2!1sen!2s" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    
    
    
    <script>
        const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);
    </script>
     

  </body>
</html>


<?php
include 'footer.php';
?>