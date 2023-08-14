<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>account</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Selamat Datang : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Logout</a></b>
</div>
</body>
</html>