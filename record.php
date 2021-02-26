<!DOCTYPE html>
<html>
<head>
	<title>Complainer Home Page</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" 
	
	<?php
//session_start();
//$_SESSION['u_id']=$u_id;
if(isset($_POST['s'])){
    
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
	
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $c_name=$_POST['c_name'];
        $f_name=$_POST['f_name'];
        $age=$_POST['age'];
        $a_no=$_POST['aadhar_number'];
        $gen=$_POST['gender'];
        $mob=$_POST['mobile_number'];
		$city=$_POST['city'];
		$cr_place=$_POST['c_place'];
		$cr_type=$_POST['c_type'];
		$addr=$_POST['address'];
       
        $reg="INSERT INTO `fir1`( `c_name`, `f_name`, `age`, `a_no`, `gen`, `mob`, `city`, `cr_place`, `cr_type`, `addr`) values('$c_name','$f_name','$age','$a_no','$gen','$mob','$city','$cr_place','$cr_type','$addr')";
        mysqli_select_db("crime_portal");
        $res1=mysqli_query($con,$reg);
        if(!$res1)
		{
	 $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
        }
		else
        {
       $message = "record added Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
   
    
    }
    }

?>
   
</head>

<body style="background-size: cover;
    background-image: url(home_bg1.jpeg);
    background-position: center;">
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="police_pending_complain.php">Police Home</a></li>
        <li><a href="fir.php">FIR Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
        <li><a href="p_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form"><p><h2>Add Criminal Record</h2></p><br>	
				<form action="#" method="post" style="color: gray">
				Criminal Name
					<input type="text"  name="c_name" placeholder="Criminal name" required="" />
					Father Name<input type="text"  name="f_name" placeholder="criminal father name" placeholder="" required="" />
                    Age<input type="text"  name="age"  placeholder="age" min="100" max="300" required="" />
					Aadhar Number</p><input type="text"  name="aadhar_number" placeholder="aadhar_no" minlength="12" maxlength="12" required pattern="[123456789][0-9]{11}"   >
					<div class="top-w3-agile">
						<p style="color:#dfdfdf">Gender</p><select class="form-control" name="gender">
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div>
					
                    Mobile number</p><input type="text"  name="mobile_number" placeholder="mob_no" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" id="mobno" />
					<div class="top-w3-agile" style="color: gray">City
					<select class="form-control" name="city" placeholder="city" id="pspec" required onfocusout="f1()"/>>
						<option>koppal</option>
						<option>kushtagi</option>
						</select>
				</div>
					<!--City<input type="text" required name="city" placeholder="city"  id="city"   />-->
					Criminal place<input type="text"  name="c_place" placeholder="crime type" />
					<div class="top-w3-agile" style="color: gray">Crime type
					<select class="form-control" name="c_type" placeholder="crime type" id="pspec" required onfocusout="f1()"/>>
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
				    </select>
				</div>
					<!--crime type<input type="text"  name="c_type" placeholder="crime type" />-->
					Home Address</p><input type="text"  name="address" placeholder="address" required="" />
					
          <br>
					
					<input type="submit" value="Submit" name="s">
				</form>	
			</div>	
		</div>
	</div>	
</div>	
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>