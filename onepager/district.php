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
 $A=$_POST['state'];
 $B=$_POST['district'];
echo $A."<br>".$B;
?>

<?php   
	if($B)
             {
 		$data = mysql_query("SELECT DISTINCT state ,district ,quality from `2009` having district='$B' ")  or die(mysql_error()); 
 		Print "<table border cellpadding=3>"; 
 		while($info = mysql_fetch_array( $data )) 
 		{ $C=$info['quality'];
 		Print "<tr>"; 
 		Print "<th>State:</th> <td>".$info['state'] . "</td> "; 
 		Print "<th>District:</th> <td>".$info['district'] . " </td>"; 
 		Print "<th>Quality</th> <td>".$info['quality'] . "</td></tr> "; 
		
 		Print "</table>"; 
		}

		
             }
?> 
<!DOCTYPE html>
<html>
<body>
<form action="table.php" method="POST">
<?php if ($A)
	  { $disto="Select Distinct district from `2009` where state='$A'";
           $d=mysql_query($disto);
	   echo "<select name=\"district\">"; 
	   echo "<option size =10 ></option>";
	   while($row2 = mysql_fetch_array($d)) 
		{        
	     echo "<option value='".$row2['district']."'>".$row2['district']."</option>"; 
		}
	   echo "</select>";
	   echo "<button type='submit'>"."Lets GO"."</button>";
          }?>

</form>
</body>
</html>

