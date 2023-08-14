<!DOCTYPE html>
<html>

<head>
 <title>Admin</title>
 <link rel="icon" type="image/jpg" href="images/2.jpg">
 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

 <h1>
  <CENTer><b>TAMINI RESIDENCE</b></CENTer>
 </h1>

 <?php


 include('login-admin.php'); // Memasuk-kan skrip Login 

 if (isset($_SESSION['login_user'])) {
  header("location: profile.php");
 }
 ?>

 <div class="kotak_login">
  <p class="tulisan_login">ADMIN</p>

  <form action="login-admin.php" method="post" name="login" id="form-login">
   <form action="login.php" method="post">
    <label>Username</label>
    <input type="text" name="username" class="form_login" placeholder="Username" required="required">

    <label>Password</label>
    <input type="password" name="password" class="form_login" placeholder="Password" required="required">
    <input type="submit" name="submit" id="submit" class="tombol_login" value="Login"> </form>
   <br />
   <br />
   <center>
    <a class="link" href="index.html">BACK</a>
   </center>
  </form>

 </div>


</body>

</html>