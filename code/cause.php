
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

//$m=mysql_query(" select QUALITY from `qualitysheet`");
//while( $b = mysql_fetch_array( $m ))
$b="Fluoride";
{
$sql=mysql_query(" SELECT * from `qualitysheet` having QUALITY ='$b' ") or die(mysql_error());
	
Print "<table border cellpadding=3>";
Print "<br><tr>"; 
	while($cause = mysql_fetch_array( $sql )) 
		{
	
		Print "<th>Cause:</th> <td>".$cause['CAUSE'] . "</td> ";
		Print "<th>IMPACT:</th> <td>".$cause['IMPACT'] . "</td> ";	
		Print "<th>REMEDIES:</th> <td>".$cause['REMEDIES'] . "</td></tr> "; 
		
 		}
Print "</table>";
}

?>



$sql=mysql_query(" SELECT * from `qualitysheet` where QUALITY= '$C' ") or die(mysql_error());
	
		//Print "<br><table border cellpadding=3>"; 
		//Print "<br><tr>"; 
		while($cause = mysql_fetch_array( $sql )) 
		{Print "</table>";
		Print "<br><table border cellpadding=3>"; 
		Print "<br><tr>"; 
		Print "<th>Cause:</th><td>".$cause['CAUSE'] . "</td> ";
		Print "<th>IMPACT:</th><td>".$cause['IMPACT'] . "</td> ";	
		Print "<th>REMEDIES:</th><td>".$cause['REMEDIES'] . "</td> </tr>"; 
		Print "</table>";

		Print "<table>";
 		} 


