<?php 
	include "mysql_connect.php"; 
	//this is the file that connect to sql 
	$s=$_SERVER["REMOTE_ADDR"]; 
	//draws IP address of visitor
	$ipbancheck="SELECT * from banned where ip='$s'"; 
	$ipbancheck2=mysql_query($ipbancheck); 
	while($ipbancheck3=mysql_fetch_array($ipbancheck2))
	{
		$ip=$ipbancheck3[ip];
		$reason=$ipbancheck3[reason];
		$dateandtime=$ipbancheck3[date];
	}
	//above lines check to see if user Ip is in banned IPs
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BANNED</title>
<link rel="stylesheet" href="../css/style2.css" />
</head>
<body>
<section>
	<p align=center><font size="20" color="#FF0000">YOU ARE BANNED.</font></p>
    <?php
    	if ($ip)
	{
		echo "<center>Your IP address is: ", $ip, "</center>";
		echo "<center>You have been banned because: ", $reason, "</center>";
		echo "<center>You were banned at: ", $dateandtime, "</center>";
	}
	else 
	{
	//put content you want unbanned users to see here
		header ('location: ../');
	}
	?>
    <p align=center>Bans are for good reason and you will <b>not</b> be able to appeal a ban.</p>
	<h1>Happy Holidays, motherfucker.</h1>
</section>
</body>
</html>