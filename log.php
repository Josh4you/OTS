<?php
session_start();
?>

  <link rel="stylesheet" href="css2/style.css"> 
  

<?php

include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
		if(isset($found))
		{	$msg="Invalid USERNAME or PASSWORD";
			echo"<script type= 'text/javascript'>alert('$msg')
			window.location='index2.php'</script>";
			exit;
		}
	
	}
	else
	{
		$_SESSION[login]=$loginid;
		
	}
}
if (isset($_SESSION[login]))
{

		echo '<html>
				<head>
				<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
				</head>
					
					<body>
						<from>
						<div class="h1" align="middle"><h1>Welcome To  your test choose the below option </h1>
						<i class="fa fa-cloud" style="font-size:60px;color:white;"></i>
						<a href="sublist.php" class="style4"><h3>Subject for Test </h3></a></br>
							<i class="fa fa-spinner fa-spin" style="font-size:60px;color:white"></i>
						<a href="result.php" class="style4"><h3>Result</h3> </a>
						</div>
						</from>
					</body>
				</html>';
}
?>
