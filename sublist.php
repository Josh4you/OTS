<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Test - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#c0cc">
<?php
include("header.php");
include("database.php");
echo "<h2 class=head1> Select Subject to Give Test</h2>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=7>$row[1]</font></a>";
}
echo "</table>";
?>
<a href="instruct.php"><h1>Read Instructions before Giving Exams</h1></a>
</body>
</html>
