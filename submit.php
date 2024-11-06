<?php
include ("scripts/redirect.php");
include ("scripts/mysql_connect.php");
include ("scripts/bancheck.php");

$text = mysql_real_escape_string(htmlspecialchars($_POST['text'])) ;
$ip = $_SERVER["REMOTE_ADDR"];
$name = $_POST["name"];

include ("scripts/wordfilter.php");
include ("scripts/names.php");

if ($text != ""){
mysql_query("INSERT INTO submissions (`ip`, `fb`, `date`, `text`, `id`, `name`) VALUES (AES_ENCRYPT('$ip','babbysmash'), '$fb', NOW(), '".mysql_real_escape_string($text)."', NULL, '".mysql_real_escape_string($name)."');") or die(mysql_error());
if (stripos($text, 'never gonna give you up') !== false ) {
movePage (0,302,"http://www.bringvictory.com");
}
else {
movePage (0,302,"results.php");
}
}
else {
movePage (0,302,"index.php");
}
mysql_close();
?>