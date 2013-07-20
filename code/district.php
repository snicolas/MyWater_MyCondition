<?php include "connect.php";?>
<?php 
 $A=$_POST['state'];
 
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
<form action="table.php" method="POST">
<h3> <?php echo $A."<br>";?></h3>
<?php if ($A)
	  { $disto="Select Distinct district from `2009` where state='$A'";
           $d=mysql_query($disto);
	
	   echo "<select name=\"district\">"; 
	   echo "<option size =10 ></option>";
	   while($row2 = mysql_fetch_array($d)) 
		{        
	     echo "<option value='".$row2['district']."'>".$row2['district']."</option>"; 
		}
	   echo "</select><br>";
	   echo "<button type='submit' class='btn btn-info' style='width: 220px; margin: 0 auto; color: darkgreen; background-color: grey;' >"."Select District"."</button>";
          }?>

</form></div>
</body>
</html>

