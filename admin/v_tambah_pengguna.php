<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tambah pengguna</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
     <?php include "navbar.php"?>
     <div class="container m-3">
     <h1>Tambah Pengguna Baru</h1>
     <form action="m_tambah_pengguna.php" method="post">
          <table>
               <tr>
                    <td>Nama pengguna</td>
                    <td>:</td>
                    <td class="input-group">
                    <span class="input-group-text"><i class="bi bi-file-person-fill"></i></span>
                    <input type="text" name="nama"  id="" class="form-control "></td>
               </tr>
               <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-hearts"></i></span>     
                    <input type="text" name="username"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-lock"></i></span>     
                    <input type="text" name="password"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td> <select name="status" id="" class="form-select">
                         <option value="administrator">administrator</option>
                         <option value="petugas">petugas</option>
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