<?php include "connect.php";?>
<?php
session_start();
// store session data

?>
<!doctype html>
<html>
<head>
 <title>Water save it! </title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<!added for bootstrap>

 <link rel="stylesheet" type="text/css" media="all" href="styles/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" media="all" href="styles/styles.css">
<link rel="stylesheet" href="styles/bootstrap.css" media="screen" /><!--added for bootstrap-->
<link rel="stylesheet" href="styles/style.css" media="screen" />
<link rel="stylesheet" href="styles/media-queries.css" />
<link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />
<link href="styles/tipsy.css" rel="stylesheet" type="text/css" media="screen" />


<script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
 <script type="text/javascript"  src="./scripts/jquery-1.9.1.min.js"></script>
 <script type="text/javascript"  src="./scripts/bootstrap.min.js"></script>
 <script type="text/javascript"  src="./scripts/customtabs.js"></script>

<script src="scripts/jquery.knob.js" type="text/javascript"></script>
<script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="./scripts/waypoints.min.js"></script>
<script type="text/javascript" src="./scripts/setup.js"></script>
</head>
<body>
<div id="wrap"> 
  <!-- wrapper -->
  <div id="sidebar"> 
    <!-- the  sidebar --> 
    <!-- logo --> 
    <a href="#" id="logo"> <img src="./images/q.png" alt="hello" /></a> 
  <!-- navigation menu -->
    <ul id="navigation">
      <li><a href="index.html#home" class="active">Home</a></li>	
      <li><a href="index.html#map">Map</a></li>
      <li><a href="index.html#gallery">Gallery</a></li>
      <li><a href="index.html#purification">Purification</a></li>
      <li><a href="index.html#harvest">Harvest</a></li>
      <li><a href="index.html#sources">Sources</a></li>
      <li><a href="index.html#meetus">Meet Us</a></li>
      <li><a href="index.html#contact">Contact</a></li>
    </ul>
  </div>

  <div id="container"> 
    <!-- page container -->
    <div class="page" id="selection"> 
<!-- page sources -->
	  <h3 class="page_title"> Select District </h3>
      <div class="page_content">
       <form action="c1.php" method="POST" > 
        <div class="space"> </div>
        <div class="clear"> </div>
<?php   $statename=$_SESSION['statename'];
	$data = mysql_query("SELECT DISTINCT district,state from `2009` having state='$statename'")  or die(mysql_error()); 
 	while ($row = mysql_fetch_array($data))
	{ echo '
 	<input type="submit" style="width: 220px;" name="st" id="st" value="'.$row['district'].'" class=" btn btn-inverse "/><br>';
	}
	
echo '	</form>
        <div class="clear"> </div>
      </div>
      
    </div>
	</div></div>
	</div></body></html>';
?>
