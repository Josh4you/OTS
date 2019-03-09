<?php
 if(isset($_POST['submit']))
 {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " .$conn->connect_error);
}

$sql = "INSERT INTO admin_info(first name,last name,Username,emailID,password)
VALUES('$_POST[f_name]','$_POST[l_name]','$_POST[u_name]','$_POST[email_id]','$_POST[password]')";

if ($conn->query($sql) === TRUE) 
{
	echo "<html><script>window.location='login.php';</script></html>";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

  }
?>