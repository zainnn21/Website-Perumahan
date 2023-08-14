<!DOCTYPE html>
<html>
<head>
 <title>REGISTRASI</title>
 <link rel="icon" type="image/jpg" href="images/2.jpg">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 <h1><CENTer><b>REGISTRASI</CENTer></h1>

 <?php 
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }
 }
 ?>
 
 <div class="kotak_login">
  <p class="tulisan_login">Masukan Data Diri</p>
 
  <form action="aksi.php" method="post">
           <label>Masukan Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
   <label>Masukan Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">
   <label>Masukan Email</label>
   <input type="text" name="email" class="form_login" placeholder="Email" required="required">

            <label>Masukan Nomor Telepon</label>
   <input type="text" name="telp" class="form_login" placeholder="No Telp" required="required">

   
   <input type="submit" class="tombol_login" value="DAFTAR">
 
   <br/>
   <br/>
   <center>
    <a class="link" href="index.html">BACK</a>
   </center>
  </form>
  
 </div>
 
 
</body>
</html>