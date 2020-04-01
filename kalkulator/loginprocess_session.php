<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sah =(($username == 'adelia' AND $password =='adelia123'));
$_SESSION['id'] = $sah;

if($_SESSION['id'])
{
	
	echo "<a href=\"kira.php\">Ke Kalkulator Online</a>";
}
else
{
	echo "Maaf anda tidak berjaya masuk sistem. sila cuba lagi";
}
?>