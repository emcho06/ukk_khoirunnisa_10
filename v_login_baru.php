<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Kasir</span></div>
        <form action="m_login.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username_login" placeholder="Username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password_login" placeholder="Password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>