  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
<!--  hossam -->  
  <!--  <script src="js/bootstrap.min.js"></script> -->  
      <!--   <link rel="stylesheet" href="css/bootstrap.min.css">   -->  
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



<?php

// error fun  https://www.w3schools.com/php/php_error.asp
//https://stackoverflow.com/questions/18916966/add-php-variable-inside-echo-statement-as-href-link-address
function customError($errno, $errstr) {
echo '<a href="hossam.php">Home</a> </br>';
}

//set error handler
set_error_handler("customError");

//trigger error 


//include('database_connection.php');
//include('function.php'); 
include('hossam.php'); 


$service =$_POST['service'];
$zone =$_POST['zone'];
$grade =$_POST['grade'];
//$text =$_POST['idr'];




// echo "$service";

 //echo "$zone";

 
 if(isset($_POST["service"]))
{
 $query = "SELECT * FROM medical  WHERE Service like '$service'   ";
 if(isset($_POST["zone"]))
 {
 $query .= "and Service_zone like '$zone'  ";
 }
if(isset($_POST["grade"]))
{
 $query .= "and doctor_grade like  '$grade'  ";
 }
 //echo "$query";
 
$statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
	 {
  foreach($result as $row)
  {
   $output .= 
   '
  

      <div class="col-sm-4 col-sm-4 col-sm-4 "style="margin-top:70px;">

<div style="border:0px solid #ccc; border-radius:5px; padding:20px; margin-bottom:16px; height:500px;">

	<div class="card" style="width:18rem; " >
	


	<div class="img">
     <img src="image/'. $row['service_image'] .'" alt="" class="rounded-circle " >
	  </div>
     <p align="center"><strong><a href="#">'. $row['Service_name'] .'</a></strong></p>
     <h4 style="text-align:center;" class="text-danger" >'. $row['service_price'] .'</h4>
<div class="phone">
        <p  align="right" class="text-info" > <span class="fas fa-phone" ></span> '. $row['Service_phone1'] .'  '. $row['Service_phone2'] .' </p>
		  </div>
        <div class="serv">
       <p  align="right" class="text-info" > <span class="fas fa-stethoscope" ></span>  '. $row['Service'] .' </p>
  </div>
  <div class="zone">
 <p  align="right" class="text-info" >  <span class="fas fa-map-marked-alt" ></span> '. $row['Service_zone'] .' </p>
</div>

<div class="grade">

<p  align="right" class="text-info" > <span class="fas fa-graduation-cap" ></span> '. $row['doctor_grade'] .' </p>
</div>

<div class="address">
      <p  align="right" class="text-info" > <span class="fas fa-map-marked-alt" ></span> '. $row['service_address'] .' </p>
</div>

    <div class="p-sm">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fas fa-envelope"></i></a>
    </div>

 <br />
</div>
 </div>
 </div>


   '
   ;
	 }}
	  else
 {
  $output = '
  <div class="jumbotron">

  <p class="lead"> عذرا، لا يمكن العثور على اي طبيب يطابق بحثك</p>
  <hr class="my-4">
  <p>.</p>
  <a class="btn btn-primary btn-lg" href="hossam.php" role="button">Search again</a>
</div>
  
  ';
 }
 echo $output;
}

