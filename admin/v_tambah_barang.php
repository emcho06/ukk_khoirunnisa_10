<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Tambah Barang</h1>
  <div class="container m-3">
  <form action="m_tambah_barang.php" method="post">
    <table>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td class="input-group">
          <span class="input-group-text"><i class="bi bi-bag-heart-fill"></i></span>
          <input type="text" name="nama_barang"  id="" class="form-control"></td>
      </tr>
      <tr>
        <td>Stok Barang</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-cart-plus"></i></i></span>
          <input type="text" name="stok_barang"  id="" class="form-control"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td><div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="harga_barang" >

                    </div>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-outline-success" ></td>
        <script src="../js/bootstrap.min.js"></script>
      </tr>
    </table>
  </form>
  </div>
  </div>
</body>

</html>