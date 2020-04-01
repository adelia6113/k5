<?php if(isset($_POST['nombor'])){ 
$pertama = $_POST['pertama'];
$kedua = $_POST['kedua'];
$operasi = $_POST['operasi'];
 switch ($operasi) {
     case 'tambah':
     $hasil = $pertama + $kedua;
   break;
   case 'kurang':
    $hasil = $pertama - $kedua;
   break;
   case 'kali':
    $hasil = $pertama * $kedua;
    break;
   case 'bagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>KALKULATOR</title>

  <link href="style.css" rel="stylesheet" type="text/css">
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
  <li><a href="login.php">Utama</a></li>
  <li><a class="active"href="kira.php">Kalkulator</a></li>
  <li><a href="logout.php">Log Keluar</a></li>
</ul>
  <center>
  <H1><marquee width="1300" height="40">SELAMAT DATANG KE SISTEM KALKULATOR</H1></marquee>
  <img src="banner.jpg" width="1300" height="300"  align="bottom">
</center>


  <center>
 <div class="kalkulator">
  <h1>KALKULATOR</h1>
  <form action="" action="" method="post">
    
   <input class="number" type="number" name="pertama" placeholder="Masukkan Bilangan Pertama">
   
   <input class="number" type="number" name="kedua" placeholder="Masukkan Bilangan Kedua">
   <br>
   <select class="option" name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
   </select>
   <br><br>
   <input type="submit" name="nombor" class="tombol" value="Hitung">
  </form>


  
  <?php if(isset($_POST['nombor'])){ ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="0" class="number">
  <?php } ?> <br>

</div></center>
 </body>
 </html>