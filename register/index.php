<?php 
if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }
 }
 ?>
 
 <div class="kotak_regis">
  <p class="tulisan_regis">Masukan Data Diri</p>
 
  <form action="aksi.php" method="post">
           <label>Masukan Username</label>
   <input type="text" name="username" class="form_regis" placeholder="Username" required="required">
 
   <label>Masukan Password</label>
   <input type="password" name="password" class="form_regis" placeholder="Password" required="required">
   <label>Masukan Email</label>
   <input type="text" name="email" class="form_regis" placeholder="Email" required="required">

            <label>Masukan Nomor Telepon</label>
   <input type="text" name="telp" class="form_regis" placeholder="No Telp" required="required">

   
   <input type="submit" class="tombol_regis" value="regis">
 
   <br/>
   <br/>
   <center>
    <a class="link" href="index.html">BACK</a>
   </center>