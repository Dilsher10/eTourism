<?php
//fetch.php
include 'config.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM producttable 
  WHERE packageName LIKE '%".$search."%'
  OR packageCategory LIKE '%".$search."%' 
  OR packagePrice LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM producttable";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_array($result))
 {
  $output .= "
  <div class='col-md-4'>
  <div class='card'>
      <img src='admin/$row[packageImage]' class='card-img-top'>
      <div class='card-body'>
          <h5 class='card-title'>$row[packageName]</h5>
          <p class='card-text'>Rs: $row[packagePrice]/=</p>
          <a href='detail.php? Id=$row[Id]' class = 'btn btn-primary text-white'>Details</a>
      </div>
  </div>
</div>
  ";
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>