<?php
session_start();
error_reporting(1);

include("database.php");
echo"</br>";

if(isset($_POST['submit'])){
	$nm=$_POST['name'];
	$em=$_POST['email'];
	$mg=$_POST['message'];
	$query="insert into contact(Name,Email,Msg)values('$nm','$em','$mg')";
	$ms=mysql_query($query)or die("Could Not Perform the Query");
}
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Online Test site </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>

</h1>THANK YOU ..</h1>
<div>
	<p></h2>Your Query has been recorded ..</h2></p>
	<p>WE will get back to you as soon as possible</p>
	<a href ="index2.php">click to go back to main site </a>
</div>

</body>
</html>
