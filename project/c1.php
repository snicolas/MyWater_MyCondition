<?php include "connect.php";?>
<?php
session_start();
// store session data

?>
<?php 
 $B=$_POST['st'];
 $B = strtoupper($B);
?>
<?php
$result=mysql_query("SELECT distinct state from `2009`");
$flag='0';
while ($d=mysql_fetch_array($result))
{
  if( $d['state'] == $B )
  {$flag='1';   break;}
  
}
if( $flag != '1')
{
  $result=mysql_query("SELECT distinct district from `2009`");
  while ($d=mysql_fetch_array($result))
  {
  if( $d['district'] == $B )
  {$flag='2';   break;}
  } 
}
if ($flag=='0')
{?>

<script type="text/javascript">
alert ("No Data corresponding to your entry");
var howLongToWait = 3; //number of seconds to wait
var urlOfRedirectLocation = 'http://projects.iic.ac.in/nic/AnD/';
function startRedirect() {
window.location = urlOfRedirectLocation;
}
setTimeout('startRedirect()', howLongToWait * 2);

</script>
<?php }
?>
<?php    
               
           if($flag=='2')
             {  
 		$data = mysql_query("SELECT DISTINCT quality, state, district from `2009` having district='$B'")  or die(mysql_error()); 
	        $num = mysql_num_rows($data);
		$C = $num;
		//echo $D_[$num];
		while($num > '0')
		{	$info = mysql_fetch_array( $data );
 		     	$D[$num]=$info['quality'];
			$num=$num-'1';
 		$state = $info['state'] ;
                $district = $info['district'] ;
		 
		}
	     }
   if($flag=='1')
             {
 		 $_SESSION['statename']=$B;
		include "test.php";
	      
	     }
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
    <a href="index.html" id="logo"> <img src="./images/q.png" alt="hello" /></a> 
    <!-- navigation menu -->
    <ul id="navigation">
      <li><a href="index.html">Home</a></li>
		<?php 
		  $i='1';
		 while ( $i <= $C )
		{ if($i=='1')
    		  echo "<li><a href='#".$i."' class='active'>".$D[$i]."</a></li>";
		  else
		  echo "<li><a href='#".$i."'>".$D[$i]."</a></li>";
		$i = $i+'1';
		}?>
     
    </ul>
  </div>
	<?php if(!$flag)
		{echo '<div id="container"> 
       		 <div class="page">
   		<h3 class="page_title"> Condition in my area </h3>
		</div>
		</div>';}?>
<?php 
$i='1';
while($i<=$C)
 {   


	$sql=mysql_query(" SELECT * from `quality` where Type= '$D[$i]' ") or die(mysql_error());
	$info = mysql_fetch_array($sql);	
 echo ' <div id="container"> 
      
        <a class="gotop" href="#top">Top</a>
	 <div class="page" id="'.$i.'"> 
      <!-- page cause-->
     
      <div class="page_content">

	<h3 align="center">';
 echo $state." - ".$district."<br>".$D[$i];
 echo '</h3> 

	
    <!--<div class="row">
      <div class="span12">-->
       
       
        <ul class="nav nav-tabs">
          <li class="active"><a href="#cause'.$i.'" data-toggle="tab">CAUSE</a></li>
          <li><a href="#impact'.$i.'" data-toggle="tab">IMPACT</a></li>
          <li><a href="#remedies'.$i.'" data-toggle="tab">REMEDIES</a></li>
        </ul>
            
        <div class="tab-content">
          <div class="tab-pane active" id="cause'.$i.'">
            
            <p>';
	//$sql=mysql_query(" SELECT * from `quality` where Type= '$D[$i]' ") or die(mysql_error());
	//while ($info = mysql_fetch_array($sql))
        echo $info['Cause']."<br><br>";
       echo '</p>
            
          </div><!-- @end #cause -->
          
          <div class="tab-pane" id="impact'.$i.'">
           
            
            <p>';
	//$sql=mysql_query(" SELECT * from `quality` where Type= '$D[$i]' ") or die(mysql_error());
	//while ($info=mysql_fetch_array($sql))
        echo $info['Impact']."<br><br>";
        echo '</p>
          </div><!-- @end #impact-->
          
          <div class="tab-pane" id="remedies'.$i.'">
          
            <p>';
	//$sql=mysql_query(" SELECT * from `newquality` where Type= '$D[$i]' ") or die(mysql_error());
	//while ($info=mysql_fetch_array($sql))
    	 echo $info['Remedies']."<br><br>";
	echo '</p>
           </div><!-- @end #remedies-->
               </div>';

echo ' <!-- @end .tab-content -->
 <!--   </div>- @end .span12 -->
  <!--  </div> @end .row -->
  <div class="clear"> </div>
 </div><!--page content-->
</div><!--page-->

 </div><!--container-->
 ';

$i=$i+'1';
}
?>
</div><!--wrap-->
 <div class="clear"> </div> <div class="clear"> </div><div class="clear"> </div>
</body>
</html>      
