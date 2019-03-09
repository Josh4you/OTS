
  
<table border="0" width="100%" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="90%" valign="top">
</div></td>
    
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000">
  <tr>
    <td width="100%" align="right"><img border="0" src="stud.jpg" width="89" height="60"></td>
  </tr>
  </Table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"index2.php\"> Home </a>|<a href=\"singup23.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  
</table>
