<?php

$db_host = "localhost";
$db_username = "rantroom";
$db_pass = "<REDACTED>";
$db_name = "rantroom";

$dongs = mysql_connect ("$db_host", "$db_username", "$db_pass") or die ("Could not connect to MySQL");
mysql_set_charset('utf8',$dongs);
mysql_select_db("$db_name") or die ("No database");

?>