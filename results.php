<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
	<!--[if IE]>	
	<link rel="shortcut icon" href="images/favicon.ico" />
	<![endif]-->
	<!--[if !IE]><!-->
	<link rel="shortcut icon" href="images/favicon.png" />
	<!--<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/style2.css" />
	<title>View posts</title>
	<script type="text/javascript" src="scripts/snow.js"></script>
    <!--[if lt IE 9]>
	<script src="scripts/html5.js"></script>
	<![endif]-->
</head>
<body>
	<br />
    <img src="images/banner.png"/>
	<h3><font color="#FFFFFF">Click <a href="/.">here</a> to go back</font></h3>
    <br />
	<?php
		// All code here owned and created by RedRingofWar
		include ("scripts/mysql_connect.php");
		include ("scripts/bancheck.php");
		if (isset($_GET["p"])) { $page  = $_GET["p"]; } else { $page=1; };
		$start_from = ($page-1) * 20;
		$sql="SELECT * FROM `submissions` ORDER BY `date` DESC LIMIT $start_from, 20";
		$rs_result = mysql_query ($sql);
		
		if ($_GET["p"] >= 9000) {echo '<font color="FFFFFF"><h1>IT\'S OVER 9000!!!!!</h1></font>';}
		
		while ($row = mysql_fetch_assoc($rs_result)) { 
		
		if ($row["spam"] == 1){}
		else 
		{
		$text = $row['text'];
		echo "<section><rpost><font size=2><b>Post No. </b>";
		echo $row["id"];
		echo " <b>Date posted:  </b>";
		echo $row["date"];
		echo "   ";
		echo "<b>Name: </b>";
		echo $row["name"];
		echo "</font></rpost><br /><br />";
		echo $text;
		echo "</section><br /><br />";
		}
		
		// $ttlrcd = $row[0]
		// $postnum = $ttlrcd // fuck it, I'll do it later.
		
		}
		mysql_close;
	?>
	<script type="text/javascript" src="scripts/sidebar.js"></script>
	<script type="text/javascript" src="scripts/mootools.js"></script>
	<div id="advertising" class="sidebox">
	<p>If you would like a customized posting name, donate any amount to the site and then let us know what you want to do!</p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> <input name="cmd" type="hidden" value="_s-xclick" /> <input name="hosted_button_id" type="hidden" value="<REDACTED>" /> <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" type="image" /> <img src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1" /> </form>
	</div>
	<div id="content" class="sidebox">
	<p><strong>Want to post again?</strong></p>
	<form name="myform" method="post" action="submit.php">
		<input type="text" name="name" onFocus="this.value=''; this.onfocus=null;" value="Enter desired name here"/>
		<br />
		<p>Post:</p>
		<textarea name="text" cols="14" rows="4"></textarea>
		<br />
		<input type="submit" value="Submit"/>
	</form>
	</div>
	<p><b><font color="#FFFFFF">Page: </font></b></p>
	<?php
		$sql = "SELECT COUNT(id) FROM `submissions`"; 
		$rs_result = mysql_query($sql); 
		$row = mysql_fetch_row($rs_result); 
		$total_records = $row[0]; 
		$total_pages = ceil($total_records / 20);
		
		for ($i=1; $i<=$total_pages; $i++) {
		if ($page == $i) {echo "<font color='white'>".$i." </font>";}
		else {
		echo "<a href='results.php?p=".$i."'>".$i."</a> "; 
		}
		}; 
	?>
	<h3><font color="#FFFFFF">Click <a href="/.">here</a> to go back</font></h3>
</body>
</html>
