<?php
//header.php
?>
<!DOCTYPE html>
<html>
	<head>
	<!--	<title>medical Network</title> -->
		<script src="js/jquery-1.10.2.min.js"></script>
		 	<!--	<link rel="stylesheet" href="css/bootstrap.min.css" /> -->
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		 <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />  
		
		<!-- <script src="js/bootstrap.min.js"></script>   -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		
		<html lang="en">
<title>Medical Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="./rtl/bootstrap-rtl.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
			<!DOCTYPE html>
	
		
	</head>
	<body>
		
			
			<div class="jumbotron text-center" style="margin-bottom:0">
  <h1> Aict Medical Network </h1>
  <p>Find Your Medical Service </p> 
</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <a class="navbar-brand" href="hossam.php">
   <img src="./image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  Medical Network</a>
  <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ">
	<?php
					if($_SESSION['type'] == 'master')
					{
					?>
					
      
      <li class="nav-item">
        <a class="nav-link" href="user.php">users</a>
      </li>
	  <?php
		}
		?>
		<li class="nav-item">
        <a class="nav-link" href="profile.php">profile</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout.php">logout</a>
							
      </li>    
    </ul>
	
<ul class="nav navbar-nav navbar-right">

	<li class="dropdown">
<a href="#" class="dropdown-toggle"  data-toggle="dropdown"><span class="btn btn-dar"></span> <?php echo $_SESSION["user_name"]; ?></a>
<ul class="dropdown-menu">
 
<li><a href="profile.php">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>	
	
  </div>  
</nav>
