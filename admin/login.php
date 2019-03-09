<?php
session_start();
error_reporting(1);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative Area Online Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">Welcome to Admistrative Area </p>
<div style="margin:auto;width:90%;height:800px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:10%;padding-top:5%">
<p class ="style9"> Here you can Add and Delete the subject,test or question's for the students"</p>

<div style="margin:auto;width:90%;height:70px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:center">
<p class="style7"> Important Note </p><p class="style3"> * You cant add questions directly without adding any test or subject first</P>
</div>
  
<p class ="style7"> Click The Link below to Start</p>
<p class="style7"><a href="subadd.php">* Add Subject</a></p>
<p class="style7"><a href="testadd.php">* Add Test</a></p>
<p class="style7"><a href="questionadd.php">* Add Question </a></p>
<p class="style7"><a href="Delsub.php">* Delete Subject</a></p>
<p class="style7"><a href="deltest.php">* Delete Test </a></p>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>
</body>
</html>
