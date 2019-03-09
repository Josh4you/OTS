<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#c000cc">
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");   /*matching of subid from sublist and the sub id in the database*/ 
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=#ffffff size=12> You have selected :$row1[1] as your choice </font></h1>"; /*targeting the 1 element of the row in the table*/
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)/*if no row are found then this part is exequeted*/
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Test Name to Give Test </h2>";
echo "<table align=center border = 1>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=7>$row[2]</font> <p><font size= 4>total no of que $row[3]</font></p></a>";
	
	/* here above code is compareing the testid and the sub_id of the from the pervious from and the databse sub and test id and then echoing out them in the table*/
	
}
echo "</table>";
?>
</body>
</html>
