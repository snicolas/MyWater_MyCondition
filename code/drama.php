<?php
$username = "root";
$password = "vineeta";
$hostname = "localhost"; 
$database = "MyWater";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password, $database)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
$a=$_GET["state"];
$b=$_GET["district"];
 mysql_select_db($database) or die(mysql_error()); 
?>
<?php echo "<br>".$a."<br>";?>
<?php 
 echo $b; ?>

<?php 
 $data = mysql_query("SELECT State ,District ,Quality from `2012` having State='$a' or District='$b' ")  
 or die(mysql_error()); 
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>State:</th> <td>".$info['State'] . "</td> "; 
 Print "<th>District:</th> <td>".$info['District'] . " </td>"; 
 Print "<th>Quality</th> <td>".$info['Quality'] . "</td></tr> "; 
 } 
 Print "</table>"; 
 ?> 


