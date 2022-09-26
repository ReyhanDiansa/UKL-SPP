<?php
session_start();
if ($_SESSION['status_login']==false) {
  header('location: ../login/loginadmin.php');
}else{
?>

Halo Siswa
<a href="logout.php">log out</a>
<?php
}
?>