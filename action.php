<?php
   require "config.php";

   if(isset($_POST['action'])){
       $sql = "SELECT * FROM producttable WHERE packageCategory !='' ";
       if(isset($_POST['packageCategory'])){
           $packageCategory = implode("','" , $_POST['packageCategory']);
           $sql .= "AND packageCategory IN('".$packageCategory."')";
       }
       $result = mysqli_query($con,$sql);
       $output='';

       if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $output.="
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
    }
    else{
        $output="<h2>No Record Found.</h2>";
    }
    echo $output;
   }
?>