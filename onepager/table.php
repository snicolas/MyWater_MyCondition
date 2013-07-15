
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
 $B=$_POST['district'];
echo $B."<br>";

           if($B)
             {
 		$data = mysql_query("SELECT DISTINCT state ,district ,quality from `2009` having district='$B' ")  or die(mysql_error()); 
 	
 		while($info = mysql_fetch_array( $data )) 
 		{ $C=$info['quality'];
		Print "<table border cellpadding=3>"; 
		//$cause = mysql_query("SELECT * from `qualitysheet` 
                //where $C="`qualitysheet`.QUALITY"")  or die(mysql_error()); 
 		Print "<br><tr>"; 
 		Print "<th>State:</th> <td>".$info['state'] . "</td> "; 
 		Print "<th>District:</th> <td>".$info['district'] . " </td>"; 
 		Print "<th>Quality:</th> <td>".$info['quality'] . "</td> </tr>";
	
		$sql=mysql_query(" SELECT * from `qualitysheet` where QUALITY= '$C' ") or die(mysql_error());
	
		//Print "<br><table border cellpadding=3>"; 
		//Print "<br><tr>"; 
		while($cause = mysql_fetch_array( $sql )) 
		{
		Print "</table>";
		Print "<table border cellpadding=3>"; 
		Print "<br><tr>";
		Print "<th>Cause:</th><td>".$cause['CAUSE'] . "</td></br> ";
		Print "<th>IMPACT:</th><td>".$cause['IMPACT'] . "</td></br> ";	
		Print "<th>REMEDIES:</th><td>".$cause['REMEDIES'] . "</td></tr></br> "; 
		Print "</table>";
		
 		}
		//
		//Print "<th>Cause:</th> <td>".$cause['CAUSE'] . "</td> ";
		//Print "<th>IMPACT:</th> <td>".$cause['IMPACT'] . "</td> ";	
		//Print "<th>REMEDIES:</th> <td>".$cause['REMEDIES'] . "</td></tr> "; 
 		} 
	

		
 		
            }
?> 



