<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bbdms");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select3/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/logmain.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">

        <?php
   $user=$_SESSION['User'];
   $res=mysqli_query($link,"select * from signup where mail='$user'");

   while ($row=mysqli_fetch_array($res))
   {

     $id=$row["s_id"];
     $fn=$row["f_name"];
     $ln=$row["l_name"];
     $bd=$row["b_day"];
     $sex=$row["gender"];
     $dis=$row["diseases"];
     $phn=$row["phone"];
     $group=$row["b_group"];
     //echo $choya;
     $_SESSION['sid']=$id;
   }
   ?>

<h5 align="center"> Welcome <b> <?php echo $fn," ",$ln;?> </b></h5></br>
 <img src="images/img_icon.jpg" alt="icon" width="200" height="240" style=" margin:0px 75px"">
<h5 align="center"><u><b> Email:</b></u>  <?php echo $user;?> </h5>
<h5 align="center"><u><b> Phone:</b></u>  <?php echo "0",$phn;?> </h5>
<h5 align="center"><u><b> Birthday:</b></u>  <?php echo $bd;?> </h5>
<h5 align="center"><u><b> Blood Group:</b></u> <?php echo $group;?> </h5>
<h5 align="center"><u><b> Gender:</b></u> <?php echo $sex;?> </h5>
<h5 align="center"><u><b> Diseases:</b></u> <?php echo $dis;?> </h5>

			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select3/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
