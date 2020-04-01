<!DOCTYPE html>
<html>
<head>
	<title>SISTEM KALKULATOR</title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
 <body bgcolor="#afafaf">

 	<ul>
  <li><a  href="login.php">Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a class="active" href="logout.php">Log Keluar</a></li>
</ul>

 	<center>
 	<H1><marquee width="1300" height="40">SELAMAT DATANG KE SISTEM KALKULATOR</H1></marquee>
 	<img src="banner.jpg" width="1300" height="300"  align="bottom">
</center>
<center>
<?php
session_start();
session_destroy();
echo "You're log out!";

echo "<a href=\"login.php\">Ke Halaman Utama</a>";
?>
</center>
</H1>
</center>
</body>
</html>