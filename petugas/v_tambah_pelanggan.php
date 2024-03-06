<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pelanggan Baru</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Tambah Pelanggan Baru</h1>
  <form action="m_tambah_pelanggan.php" method="post">
    <input type="hidden" name="id_login" class="form-control" value=" <?= $_SESSION['id_login'] ?>">
    <table>
      <tr>
        <td>Id Pelanggan</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-pin-angle"></i></span>
        <input type="text" name="id_pelanggan" id=""  class="form-control"value="<?= date('mis'); ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td  class="input-group">
        <span class="input-group-text"><i class="bi bi-file-person-fill"></i></span> 
        <input type="text" name="nama_pelanggan" id="" class="form-control"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi-geo-alt me-2"></i></span>    
        <input type="text" name="alamat_pelanggan" id="" class="form-control"></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-telephone"></i></span>  
        <input type="text" name="telepon_pelanggan" id="" class="form-control"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-outline-success"></td>
        <script src="../js/bootstrap.min.js"></script>
      </tr>
    </table>
  </form>
  </div>
</body>

</html>