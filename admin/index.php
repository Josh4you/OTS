<?php
session_start()
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'>
</head>

<body >

<style>
.font-style {
	font-family: Alex Brush;
	color: #000000;
	font-size: 400;
	padding: 15;
	text-decoration: underline;
}
</style>

<?php
include("header.php");
?>

<div >
<p class="font-style"><h1>Adminstrative Login </h1> </p>
</div>
<div align="right" width="100">
 <a id="mybutton" href="../index2.php">
  <button class="btn">Back to HOME page </button>
 </a>
</div> 
<form name="form1" method="post" action="login.php" >
<table width="590" border="0" >
  <tr>
    <td width="90"><span class="style2"></span></td>
    <td width="102" height="230"><span class="style2"><span class="head1"><img src="../image/admin.jpg" width="131" height="255"></span></span></td>
    <td width="238">
	<table width="419" border="0" align="center">
		<tr>
		<td width="63" class="style2">Login ID </td>
		<td width="149"><input name="loginid" type="text" id="loginid"></td>
		</tr>
		<tr>
		<td class="style2">Password</td>
		<td><input name="pass" type="password" id="pass"></td>
		</tr>
		<tr>
		<td class="style2">&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td class="style2">&nbsp;</td>
		<td><input name="submit" type="submit" id="submit" value="Login"></td>
		</tr>
	</table>
</td>
  </tr>
</table>
<div class="font-style" align="center">
<h3>Please Enter Your User-Name and Password To Enter</h3>
</div>
</form>

</body>
</html>
