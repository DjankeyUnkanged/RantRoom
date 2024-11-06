<?php
include ("mysql_connect.php");
$result = mysql_query('SELECT * FROM `banned` ORDER BY `id`') or die(mysql_error());
while($row = mysql_fetch_assoc($result))
{

$ips[] = $row['ip'];

}
if(in_array($_SERVER['REMOTE_ADDR'],$ips))
{

header('location: scripts/banned.php');

exit();
}
?>