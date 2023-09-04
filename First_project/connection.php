<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kursinis_darbas";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>
