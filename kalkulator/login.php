
<!DOCTYPE html>
<html>
<head>
	<title>SISTEM KALKULATOR</title>
	<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
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
  background-color: #008B8B;
}
</style>
</head>
 <body bgcolor="#afafaf">

 	<ul>
  <li><a class="active" href="login.php">Utama</a></li>
  <li><a href="kira.php">Kalkulator</a></li>
  <li><a href="logout.php">Log Keluar</a></li>
</ul>

 	<center>
 	<H1><marquee width="1300" height="40">SELAMAT DATANG KE SISTEM KALKULATOR</H1></marquee>
 	<img src="banner.jpg" width="1300" height="300"  align="bottom">
</center>



<form action="loginprocess_session.php" method="post">
	<h1><center>Daftar Masuk Pengguna</center></h1>
<h4><center>Sila Masukkan Nama Pengguna Dan Kata Laluan.</center></h4>
<center>
	
	Username:<input type="text"name="username"size="20"/>
	Password:<input type="password"name="password"size="10"/>

	<br>
</br>
<input type='submit' name='log in'value='submit'>
<br></br>
<a href="sign_up.php"target="top"value="sign up">Pertama Kali Daftar(Sign Up)</a><br>
</br>

</br>
</br>
</center>
</form>
<center>
<div>
        <label>Choose Your Background :</label>
        <button type="button" onclick="changeBodyBg('yellow');">Yellow</button>
        <button type="button" onclick="changeBodyBg('lime');">Lime</button>
        <button type="button" onclick="changeBodyBg('orange');">Orange</button>
         <button type="button" onclick="changeBodyBg('blue');">Blue</button>
        <button type="button" onclick="changeBodyBg('gray');">Gray</button>
    </div>
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>


</body>

</html>