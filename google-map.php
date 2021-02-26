<?php
    $latitude = $_GET['lat'];
$longitude = $_GET['lon'];
?>
	
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
 
      
