<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
if(isset($_GET["subid"])||(isset($_GET["sub_name"])))
{
	$del_id=$_GET["subid"];
	$sub_name=$_GET["sub_name"];
	if(mysql_query("Delete from mst_subject WHERE sub_id='$del_id' or sub_name='$sub_name'"))
	{
		echo "<h1 color=red>You have deleted $sub_name Successfuly </h1>";
		echo" <h2>Choose Another on to delete or go to home page</h2>";
	}
}

echo "<h2 class=head1> Select Subject to Delete</h2>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs)){
$del=$row[0];
$del1=$row[1];
	echo "<tr align=center>
			<td><a href=Delsub.php?subid=$del>$del1</a></td>
			<td><a href=Delsub.php?sub_name=$del1> Delete this subject</a></td>
		</tr>";
}
echo "</table>";
?>
