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
<!DOCTYPE html>
<html>
<body>

<form action="drama.php" method="get">

<?php
 //$data = mysql_query("SELECT Distinct State from `2012`")  
 //or die(mysql_error());
//Print "<table border cellpadding=3>"; 
//while($info = mysql_fetch_array( $data )) 


//{
// STATE:<select name="state">
//echo '<option value="' . $info['State'] . '"> ' . $info['State'] . '</  option>'</select>;
// Print "<tr>"; 
// Print "<th>State:</th> <td>".$info['State'] . "</td> </tr>"; 
//}
// Print "</table>"; ?>


<?php
$stat="Select Distinct State from `2012`";
$s=mysql_query($stat);
echo "<select name=\"state\">"; 
echo "<option size =10 ></option>";
while($row1 = mysql_fetch_array($s)) 
{        
echo "<option value='".$row1['State']."'>".$row1['State']."</option>"; 
}
echo "</select>";

$disto="Select Distinct District from `2012`";
$d=mysql_query($disto);
echo "<select name=\"district\">"; 
echo "<option size =10 ></option>";
while($row2 = mysql_fetch_array($d)) 
{        
echo "<option value='".$row2['District']."'>".$row2['District']."</option>"; 
}
echo "</select>";
?>


<input type="submit">
</form>
</body>
</html>
