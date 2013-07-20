<?php
$username = "root";
$password = "vineeta";
$hostname = "localhost"; 
$database = "MyWater";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $database)
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
mysql_select_db($database) or die(mysql_error()); 
 $A=$_POST['search'];
//echo $A."<br>";
?>
<!DOCTYPE html>
<html>
<title>Water Save it!</title>
<head>
<!added for bootstrap>
<link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" href="styles/bootstrap.css" media="screen" /><!added for bootstrap>
<!added for bootstrap>
<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />

<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>
</head>
<body>



<div class="form-actions">
<form action="district.php" method="POST" >
		
		<br><br><br><br>

      <?php 
	  
	if ($A=="1")
	 {
           $stat="Select Distinct state from `2009`";
           $s=mysql_query($stat);
	   
	   echo "<select name=\"state\">"; 
	   echo "<option size =10 ></option>";
	   while($row1 = mysql_fetch_array($s)) 
		{        
	     echo "<option value='".$row1['state']."'>".$row1['state']."</option>"; 
		}
	   echo "</select><br>";
         }
        ?>
<button type="submit" style="width: 220px; margin: 0 auto; color: darkgreen; background-color: grey; " class="btn btn-info " name="search" value="1" >Select State</button>
</form></div>
</body>
</html>
