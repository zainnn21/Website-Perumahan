<!DOCTYPE html>
<html>
<head>
 <title>Tamini Residence</title>
 <link rel="icon" type="image/jpg" href="images/2.jpg">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 <h1><CENTer><b>BOOKING</b></CENTer></h1>

 <?php 
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }
 }
 ?>
 
 <div class="kotak_login">
  <p class="tulisan_login">Masukan Data Pembookingan</p>
 
  <form action="aksi-pesan.php" method="post">
  <label>Masukan username</label>
   <input type="text" name="username" class="form_login" placeholder="username" required="required">
           
  
   <label>Masukan Nama</label>
   <input type="text" name="nama" class="form_login" placeholder="nama" required="required">
   
   <label>Masukan rumah</label>
   <input type="text" name="rumah" class="form_login" placeholder="rumah" required="required">

   <label>Masukkan no handphone</label>
   <input type="text" name="handphone" class="form_login" placeholder="handphone" required="required">

   <label>Masukan Tanggal</label>
   <input type="date" name="tgl" class="form_login" placeholder="tanggal" required="required">
 

   <label>Masukan jam</label>
   <input type="text" name="jam" class="form_login" placeholder="jam" required="required">

   
   <input type="submit" class="tombol_login" value="DAFTAR">
 
   <br/>
   <br/>
   <center>
    <a class="link" href="member.php">BACK</a>
   </center>
  </form>
  
 </div>
 
 
</body>
</html>