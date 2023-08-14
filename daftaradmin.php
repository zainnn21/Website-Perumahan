<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<div class="container">
    <div class="w-75 p-3" style="background-color: #eee;" align="center">
    <?php
include "koneksi.php";
?>
<?php
$sql    = "select *from pesan";
$query  = mysqli_query($conn,$sql);
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Handphone</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($data = mysqli_fetch_array($query)){

      ?>
    <tr>
      
    <th> <?php echo $data['nama']; ?></th>
    <th> <?php echo $data['handphone']; ?></th>
    <th> <?php echo $data['tgl']; ?></th>
    <th> <?php echo $data['jam']; ?></th>
    <th> <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> </th>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
