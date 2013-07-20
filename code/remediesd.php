<?php include "connect.php";?>
<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Water save it! </title>
 <link rel="stylesheet" type="text/css" media="all" href="styles/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" media="all" href="styles/styles.css">
<link rel="stylesheet" href="styles/style.css" media="screen" />

 <link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />

 <script type="text/javascript"  src="./scripts/jquery-1.9.1.min.js"></script>
 <script type="text/javascript"  src="./scripts/bootstrap.min.js"></script>
 <script type="text/javascript"  src="./scripts/customtabs.js"></script>
</head>
<body>


	
<?php 
 //$B=$_POST['district'];
$B='RAMANAGARAM';?>
 <h3 align="center"> <?php echo $B."<br>";?></h3>



<?php             
                
           if($B)
             {
 		$data = mysql_query("SELECT DISTINCT state ,district ,quality from `2009` having district='$B' ")  or die(mysql_error()); 

 		while($info = mysql_fetch_array( $data )) 
 		{ echo $C=$info['quality'];
		Print "<table border cellpadding=3> "; 
 		Print "<br><tr>"; 
 		Print "<th>State:</th><td>".$info['state'] . "</td> ";
                Print "<th>District:</th> <td>".$info['district'] . " </td>"; 
 		Print "<th>Quality:</th> <td>".$info['quality'] . "</td> </tr>";
		Print "</table>";
		$sql=mysql_fetch_array(mysql_query(" SELECT * from `qualitysheet` where QUALITY= '$C' ")) or die(mysql_error());
?>



  <div class="container">
    <div class="row">
      <div class="span12">
       
        <p>WATER CONDITION IN MY AREA</p>
   
        <ul class="nav nav-tabs">
          <li class="active"><a href="#cause" data-toggle="tab">CAUSE</a></li>
          <li><a href="#impact" data-toggle="tab">IMPACT</a></li>
          <li><a href="#remedies" data-toggle="tab">REMEDIES</a></li>
        </ul>
            
        <div class="tab-content">
          <div class="tab-pane active" id="cause">
            <h3>CAUSE</h3>
            <p><?php echo $sql['CAUSE'];?></p>
            
            <p class="text-center">HELLO</p>
          </div><!-- @end #cause -->
          
          <div class="tab-pane" id="impact">
            <h3>IMPACT</h3>
            
            <p><?php echo $sql['IMPACT'];?></p>
          </div><!-- @end #impact-->
          
          <div class="tab-pane" id="remedies">
            <h3>REMEDIES</h3>
            <div class="row">
              <div class="span6"><h4>purify</h4>
            <p><?php echo $sql['REMEDIES'];?></p></div>
            </div>
                        
           

          </div><!-- @end #remedies-->
       
        </div><!-- @end .tab-content -->
        
      </div><!-- @end .span12 -->
    </div><!-- @end .row -->
  </div><!-- @end .container -->
<?php  }}?>
</body>
</html>      
