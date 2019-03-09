<?php
session_start();
?>
<?php
include("header.php");
include("database.php");
extract($_GET);
?>
<html>
<head>
<title>Online Quiz - Instruction</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#cc00">
<h1> Instructions</h1></br>
</br><h2>* You will be given a series of questions which you have to aanswer </h2>
<h2>* Each question carries same naumber</h2>
<h2>* All questions are mandatory </h2>
<h1>To start the test click the link below you will have to choose the subject again to start the test</h1>

<a href="sublist.php">click to start</a>

</body>
</html>