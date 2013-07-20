<?php include "connect.php";?>
<!DOCTYPE html>
<html>
<title>Water Save it!</title>
<head>
<!added for bootstrap>
<link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" href="styles/bootstrap.css" media="screen" /><!added for bootstrap>
<!--added for bootstrap-->
<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />


<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>
<script type="text/javascript" src="http://viralpatel.net/blogs/demo/jquery/jquery.shorten.1.0.js"></script><!--for less/more-->
</head>

<body>

<script>
    $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    })
</script>
<?php 
 $B=$_POST['district'];

?>

<h3 align="center"> <?php echo $B."<br>";?></h3>

<?php             
                
           if($B)
             {
 		$data = mysql_query("SELECT DISTINCT state ,district ,quality from `2009` having district='$B' ")  or die(mysql_error()); 

 		while($info = mysql_fetch_array( $data )) 
 		{ $C=$info['quality'];
		Print "<table border cellpadding=3> "; 
 		Print "<br><tr>"; 
 		Print "<th>State:</th><td>".$info['state'] . "</td> ";
                Print "<th>District:</th> <td>".$info['district'] . " </td>"; 
 		Print "<th>Quality:</th> <td>".$info['quality'] . "</td> </tr>";
		Print "</table>";
		$sql=mysql_query(" SELECT * from `qualitysheet` where QUALITY= '$C' ") or die(mysql_error());
		$cause = mysql_fetch_array( $sql );
		?>
			    <ul class="nav nav-tabs">
   				 <li><a href="#home" data-toggle="tab">Home</a></li>
    				 <li><a href="#profile" data-toggle="tab">Profile</a></li>
    				 <li><a href="#messages" data-toggle="tab">Messages</a></li>
    			    </ul>

			<div class="tab-content">
			<div class="tab-pane active" id="home">
				<?php echo "HEllo home".$cause['CAUSE']."<br>";?>
			</div>

			<div class="tab-pane" id="profile">
				<?php echo $cause['IMPACT']."<br>"; ?>
			</div>
			<div class="tab-pane" id="messages">
				<?php echo $cause['REMEDIES'] ."<br>";
					?>
			</div>
			</div>
		<?php//Print "<table border cellpadding=20 border=1>"; 
		//Print "<br><tr>";
		//Print "<th>Cause:</th>"."<th>IMPACT:</th>"."<th>REMEDIES:</th>"."</tr>";
		//Print "<tr><th>".$cause['CAUSE'] . "</th>";
		//Print "<th>".$cause['IMPACT'] . "</th>";	
		//Print "<th>".$cause['REMEDIES'] . "</th></tr>"; 
		//Print "</table>";
}}?>

</body>
</html> 




