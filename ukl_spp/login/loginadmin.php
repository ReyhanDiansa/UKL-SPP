<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION['level']=="admin") {
  header('location: ../admin/index.php');
} elseif($_SESSION['level']=="petugas") {
  header('location: ../petugas/home.php');
}elseif (isset($_SESSION['NISN'])) {
  header('location: ../siswa/dashboard.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <!-- <h2 class="active"> Sign In </h2>
      <h2 class="inactive underlineHover">Sign Up </h2> -->
      <h1 >SPPku</h1>
  
      <!-- Icon -->
     
  
      <!-- Login Form -->
      <div>
      <form action="proses_login.php" method="post" enctype="multipart/form-data" class="login" >
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" name="admin" value="Log In">
      </form>
      <div class="option-level">
        <span>Login Sebagai? </span>
        <a  class="underlineHover"href="login.php">Siswa</a>
        <span class="or">|</span>
        <a  class="active" href="loginadmin.php">Admin/Petugas</a>
          </div>
    </div>
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <span>Copyright ©<?=date('Y')?> </span>
        <!-- <a class="underlineHover" href="tambah_siswa.php">Daftar</a> -->
      </div>
  
    </div>
  </div>
</body>
</html>

<?php
}
?>
