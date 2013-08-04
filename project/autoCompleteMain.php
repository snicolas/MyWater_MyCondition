<?php
include "connect.php";
$q = strtoupper($_GET["q"]);
if (!$q) return;

$sql = "select DISTINCT state as state from `2009` where state LIKE '$q%'";
$sql2 = "select DISTINCT district as district from `2009` where district LIKE '$q%'";

$st = mysql_query($sql);
$dist = mysql_query($sql2);

if($st)
{while($rs = mysql_fetch_array($st)) {
	$cname = $rs['state'];
	echo "$cname\n";}
}
if($dist)
{while($rs = mysql_fetch_array($dist))
   {$cname = $rs['district'];
	echo "$cname\n";}
}
?>
