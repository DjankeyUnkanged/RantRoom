<?php/* 2024 Dankey says - This was used to give people fancy names with fancy encoding that would have otherwise been filtered out.You enter your 'password' in the name field, and if it matches an entry here, it will be replaced! Blank name defaults to "Anonymous" */
if ($name == "" || $name == "Enter desired name here") {
$name = "Anonymous";
}

if ($name == "example"){
$name = "<font color=yellow><b>Bolded Yellow Example</b></font>";
}