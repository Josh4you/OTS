<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>

<?php

if(isset($_GET["subid"])||(isset($_GET["test_name"])))
{
	$id=$_GET["subid"];
	$tn=$_GET["test_name"];
	if(mysql_query("Delete from mst_test where test_id ='$id'"))
	 {
		 echo "<H1>Test $tn deleted. Chose another or go back to home page</H1>";
	 }
}

echo "<br><h2>Delete Test</h2>";
echo "<br><h2>Please Click on the Test you want to Delete</h2>";
$qr = mysql_query("select * from mst_test")or die("bey");
while($row=mysql_fetch_row($qr))
{$qt=$row[2];
$del1=$row[0];
	echo "<table align=center border=0 width=500 height=80>";
	echo"<tr><td align=center><a href=deltest.php?subid=$row[0]>$qt</a></td>";
	echo "<td align=center><a href=deltest.php?test_name=$row[2]>delete</a>";
	echo "</td></tr></table>";
}
?>
