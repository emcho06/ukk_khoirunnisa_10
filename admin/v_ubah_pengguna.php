<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ubah pengguna</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
     <?php include "navbar.php" ?>
     <div class="container">
     <h1>ubah pengguna</h1>
     <?php 
     // ambil koneksi
     include "../config.php";
     // ambil id_login dari url
     $id_login = $_GET ['id_login'];
     // cari id_login di tb_login
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
     //ambil datanya
     $pengguna = mysqli_fetch_assoc($sql);
     ?>
     <form action="m_ubah_pengguna.php" method="post">
          <input type="hidden" name="id_login" id="" class="form-control" value="<?= $pengguna ['id_login'] ?>">
          <table>
               <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td  class="input-group">
                    <span class="input-group-text"><i class="bi bi-file-person-fill"></i></span>
                    <input type="text" name="nama" id="" class="form-control" value="<?= $pengguna['nama']?>"></td>
               </tr>
               <tr>
                    <td>username</td>
                    <td>:</td>
                    <td class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-hearts"></i></span>
                    <input type="text" name="username" id="" class="form-control" value="<?= $pengguna['username']?>"></td>
               </tr>
               <tr>
                    <td>password</td>
                    <td>:</td>
                    <td  class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-lock"></i></span> 
                    <input type="text" name="password" id="" class="form-control" value="<?= $pengguna['password']?>"></td>
               </tr>
               <tr>
                    <td>status</td>
                    <td>:</td>
                    <td> <select name="status" id="" class="form-select">
                         <?php
                         if ($pengguna['status'] == "administrator"){
                              echo "<option value='administrator' selected>administrator</option>";
                         } else {
                              echo "<option value='administrator' >administrator</option>";
                         }

                         if ($pengguna['status'] == "petugas") {
                              echo "<option value='petugas' selected >petugas</option>";
                         } else {
                              echo "<option value='petugas' >petugas</option>";
                         }
                         ?>
                    </select></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" class="btn btn-outline-success" ></td>
                    <script src="../js/bootstrap.min.js"></script>
               </tr>
          </table>
     </form>
     </div>
</body>
</html>