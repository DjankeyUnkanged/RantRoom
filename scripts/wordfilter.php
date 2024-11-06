<?php
function FixNewLine($text){
	$NewLine = array('\r\n');
	return str_ireplace($NewLine,'<br />',$text);
}
function FixApostrophe($text){
	$Apostrophe = array("\'");
	return str_ireplace($Apostrophe,"'",$text);
}
$text = FixNewLine($text);
$text = FixApostrophe($text);
$name = FixNewLine($name);
$name = FixApostrophe($name);
?>