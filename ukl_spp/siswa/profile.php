<?php
session_start();
$nisn=$_SESSION['NISN'];
if ($_SESSION['status_login']==false) {
  header('location: ../login/login.php');
}else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin SPPku</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/24b47ebcca.js" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="#">
        <h4>SPPku</h4>
      </a>
    </div>

    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
        <li ><a href="dashboard.php">Home</a></li>
        <li class="navbar-dropdown ">
          <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
            Pembayaran <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="my-dropdown-id">
            <li><a href="upload.php">Upload Bukti Pembayaran</a></li>
            <li><a href="historipembayaran.php">Histori Pembayaran</a></li>
          </ul>
        </li>
        <li class="active"><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
$nisn=$_SESSION['NISN'];
include "koneksi.php";
$sql=mysqli_query($conn, "select * from siswa where NISN=$nisn");
$p=mysqli_fetch_array($sql);
$que=mysqli_query($conn, "select * from siswa a join kelas b using(id_kelas) where NISN=$nisn");
$po=mysqli_fetch_array($que);
if($p['foto_siswa']==null){
    $foto="<img src='profile.png' class='round'>";
}else{
    $foto="<img src='foto/$p[foto_siswa]' class='round'>"; 
}
?>

<div class="box">
<div class="card-container">
	<?php echo $foto?>
	<h3><?=$_SESSION['nama']?></h3>
	<h5><?=$_SESSION['alamat']?></h5>
	<p>Siswa SMK<br/>
	<div class="edit">
        <form action="proses_edit_foto.php" method="post" enctype="multipart/form-data">
        <label class="button" for="upload">EditFoto</label>
     <input type="file" name="foto" id="upload" onchange="javascript:this.form.submit();">
</form>
	</div>
	
</div>

<div class="card2">
	<h3>Biodata Siswa</h3>
<table class="bio">
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td class="ket"><?php echo $p['NISN']; ?></td>
	</tr>
    <tr>
		<td>NIS</td>
		<td>:</td>
		<td class="ket"><?php echo $p['NIS']; ?></td>
	</tr>
    <tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td class="ket"><?php echo $p['nama']; ?></td>
	</tr>
    <tr>
		<td>Nomor Telepon</td>
		<td>:</td>
		<td class="ket"><?php echo $p['no_tlp']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td class="ket"><?php echo $po['nama_kelas']; ?></td>
	</tr>
</table>
</div>
</div>

<script src="app.js"></script>
</body>
</html>

<?php
}
?>