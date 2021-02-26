<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    if(!isset($_SESSION['x']))
        header("location:fir1.php");
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    //mysqli_select_db("crime_portal",$conn);
    
    /*
    $result1=mysqli_query($conn,"SELECT location FROM police_station where i_id='$i_id'");
      
    $q2=mysqli_fetch_assoc($result1);
    $location=$q2['location'];*/
    
     if(isset($_POST['s2']))
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
    
    }
}
   
    ?>
<title>Incharge View Police</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <script>
     function f1()
        {
          
            var sta2=document.getElementById("ciid").value;
            var x2=sta2.indexOf(' ');
            if(sta2!="" && x2>=0){
            document.getElementById("ciid").value="";
            alert("Blank Field not Allowed");
        }
        
       }
    </script>
</head>
<body style="background-color: #dfdfdf">
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
	<li><a href="police_pending_complain.php">Police Home</a></li>
	<li class="active"><a href="fir.php">FIR HOME</a></li>
	</ul>
      
      
      <ul class="nav navbar-nav navbar-right">
		 <li><a href="police_pending_complain.php">Pending Complaints</a></li>
        <li ><a href="police_complete.php">Completed Complaints</a></li>
		<li class="active" ><a href="fir.php">FIR MAINTAINCE</a></li>
        <li><a href="p_logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
 <div  style="margin-top: 10%;margin-left: 45%">
   <a href="record.php"><input  type="button" name="add" value="Add Police Officers" class="btn btn-primary"></a>
 </div>
    
    <div style="padding:10px;">
   <table class="table table-bordered">
    <thead class="thead-dark" style="background-color: black; color: white;">
      <tr>
        <th scope="col">criminal name</th>
        <th scope="col">father name</th>
        <th scope="col">age</th>
        <th scope="col">addhar no</th>
		<th scope="col">gen</th>
		<th scope="col">mobile</th>
		<th scope="col">city</th>
		<th scope="col">cr_place</th>
		<th scope="col">cr_type</th>
		<th scope="col">address</th>
      </tr>
    </thead>
	<tbody>
	<?php
	 $result=mysqli_query($conn,"select *from fir1");  
	while($row = mysqli_fetch_assoc($result))
	{
?>
<tr>
<td><?php echo $row['c_name']?></td>
<td><?php echo $row['f_name']?></td>
<td><?php echo $row['age']?></td>
<td><?php echo $row['a_no']?></td>
<td><?php echo $row['gen']?></td>
<td><?php echo $row['mob']?></td>
<td><?php echo $row['city']?></td>
<td><?php echo $row['cr_place']?></td>
<td><?php echo $row['cr_type']?></td>
<td><?php echo $row['addr']?></td>

</tr>
		
	<?php
	}
	?>
	</tbody>
 </div>
    
 
<div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  
</div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>