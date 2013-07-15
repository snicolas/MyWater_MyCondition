<?php
$username = "root";
$password = "vineeta";
$hostname = "localhost"; 
$database = "MyWater";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $database)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
mysql_select_db($database) or die(mysql_error()); ?>
<?php 
 $A=$_POST['region'];
echo $A."<br>";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />

<!added for bootstrap>
<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>
</head>
<body>
<div>
<form action="district.php" method="POST">
        <?php   
	if ($A=="STATE")
	 {
           $stat="Select Distinct state from `2009`";
           $s=mysql_query($stat);
	   echo "<select name=\"state\">"; 
	   echo "<option size =10 ></option>";
	   while($row1 = mysql_fetch_array($s)) 
		{        
	     echo "<option value='".$row1['state']."'>".$row1['state']."</option>"; 
		}
	   echo "</select>";
         }
        elseif ($A=="DISTRICT")
	  { $disto="Select Distinct district from `2009`";
           $d=mysql_query($disto);
	   echo "<select name=\"district\">"; 
	   echo "<option size =10 ></option>";
	   while($row2 = mysql_fetch_array($d)) 
		{        
	     echo "<option value='".$row2['district']."'>".$row2['district']."</option>"; 
		}
	   echo "</select>";
          }

         ?>
<button type="submit">SEARCH</button>
</form></div>
</body>
</html>
