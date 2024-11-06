<?php
	include ("scripts/bancheck.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--[if IE]>
	<link rel="shortcut icon" href="images/favicon.ico" />
	<![endif]-->
	<!--[if !IE]><!-->
	<link rel="shortcut icon" href="images/favicon.png" />
	<!--<![endif]-->
	<link rel="stylesheet" href="css/style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>RantRoom</title>
	<meta name="description" content="Post your rants, thoughts, and secrets anonymously!"/>
    <meta property="og:title" content="RantRoom.ca" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.rantroom.ca" />
	<meta property="og:site_name" content="RantRoom" />
	<script type="text/javascript" src="scripts/snow.js"></script>
    <!--[if lt IE 9]>
	<script src="scripts/html5.js"></script>
	<![endif]-->
</head>
<body>
	<br />
	<img src="images/header.png" 
	style="
	-moz-border-radius: 20px;
	-webkit-border-radius: 20px;
	border-radius: 20px;
	behavior: url(css/ie-css3.htc);"
	alt="RantRoom Header and Logo" />
	<br />
	<br />
	<div id="section">
    	<div id="top">
			<h3>Go ahead and post what's on your mind, whether it's a rant, a secret you've been dying to let out, or just a random thought going through your head!</h3>
            <!--[if lte IE 8]>
            	<p>I see you're using Internet Explorer 8 or lower. I suggest upgrading to IE 9 or downloading an alternate browser.<br /></p>
            <![endif]-->
			<!--[if IE]>
            	<p>Since you're using Internet Explorer, please do not use the compatibility view as it can break the site for you.</p>
            	<p>I'd strongly suggest downloading an alternate browser. Internet Explorer has quite a few security holes and these two browsers below are incredibly secure and fast.</p>
				<a href='http://www.mozilla.org/firefox?WT.mc_id=aff_en04&WT.mc_ev=click'><img src='http://www.mozilla.org/contribute/buttons/110x32bubble_b.png' alt='Firefox Download Button' border='0' /></a>
				<a href="http://www.google.com/chrome"><img src="images/chrome.png" border="0" /></a>
			<![endif]-->			
			<!--<p>The theme is currently: <b>Pet Peeves</b></p>-->
        </div>
		<div id="article">
			<p>Submitting your name is <b>OPTIONAL</b></p>
			<form name="myform" method="post" action="submit.php">
				<input type="text" name="name" onFocus="this.value=''; this.onfocus=null;" value="Enter desired name here"/>
				<br />
				<br />
				Post: <textarea name="text" cols="60" rows="12"></textarea>
		    <br />
				<input type="submit" value="Submit"/>
			</form>
			<p><a href="results.php"><img src="images/button.gif" alt="View posts" border="0" /></a></p>
			<!--<p><a href="http://blog.rantroom.ca">Click here</a> to go to the Update blog</p>-->
			<br />
			<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://www.rantroom.ca" show_faces="true" width="500" font=""></fb:like>
		</div>
	</div>
	<script type="text/javascript" src="scripts/sidebar.js"></script>
	<script type="text/javascript" src="scripts/mootools.js"></script>
	<div id="content" class="sidebox">
	<p>If you like the site, <strong>please donate!</strong></p>
	<p>Hosting is <b>not</b> free.</p>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> <input name="cmd" type="hidden" value="_s-xclick" /> <input name="hosted_button_id" type="hidden" value="<REDACTED>" /> <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_donateCC_LG.gif" type="image" /> <img src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1" /> </form>
	</div>
    <br />
    <div id="footer">
		<p>Disclaimer: <b>We are NOT responsible for anyone's post but our own. All posts are the responsibility of and are owned by the poster.</b></p>
		<p>Note: There may be a gap in between the ID numbers of some posts. This is due to spam or people abusing their freedom of speech with blatant racism or hate. We <b>do not</b> remove legitimate posts. People who post links that we deem are advertising/spam will be banned and the post(s) will be removed.</p>
	</div>
	<br />
</body>
</html>
