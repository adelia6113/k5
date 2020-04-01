<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];
echo"<br>";

$iquary="INSERT INTO pendaftaran_pengguna(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$iquery)){
	echo "Pendaftan Kali Pertama Anda Barjaya.Sila Login Semula";
	echo "<a href=\"login.php\">Daftar Masuk</a>";}
else
	{echo "Pendaftan Tidak Barjaya.Sila Cuba Lagi. <a href='login.php'>Cuba Lagi</a>";}


?>