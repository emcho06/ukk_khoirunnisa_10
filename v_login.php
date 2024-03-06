<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login - Aplikasi Kasir</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
     <h1>APLIKASI KASIR</h1>
     <div class="container m-3">
     <form action="m_login.php" method="post">
          <table>
               <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username_login" id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>password</td>
                    <td>:</td>
                    <td><input type="password" name="password_login" id="" class="form-control"></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="login" class="btn btn-outline-success"></td>
                    <script src="js/bootstrap.min.js"></script>
               </tr>
          </table>
     </form>
     </div>
</body>
</html>