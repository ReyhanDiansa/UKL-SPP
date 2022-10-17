<?php
session_start();
$nisn=$_SESSION['NISN'];
if ($_SESSION['status_login']==false) {
  header('location: ../login/loginadmin.php');
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
  <!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> -->
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
        <li class="active"><a href="#">Home</a></li>
        <li class="navbar-dropdown">
          <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
            Pembayaran <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown" id="my-dropdown-id">
            <li><a href="upload.php">Upload Bukti Pembayaran</a></li>
            <li><a href="historipembayaran.php">Histori Pembayaran</a></li>
          </ul>
        </li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
include "koneksi.php";
$sql=mysqli_query($conn, "select sum(a.nominal), b.* 
from spp as a 
join pembayaran as b 
USING(id_spp) 
where b.keterangan like 'belum lunas' 
and 
b.jatuh_tempo in (
    SELECT jatuh_tempo 
    FROM pembayaran 
    WHERE 
    month(jatuh_tempo)<=month(now()) 
    AND 
    YEAR(jatuh_tempo) = year(now())) 
    and b.NISN=$nisn ");

$qu=mysqli_query($conn,"select sum(a.nominal), b.* 
from spp as a 
join pembayaran as b 
USING(id_spp) 
where b.keterangan like 'belum lunas' 
and 
b.jatuh_tempo in (
    SELECT jatuh_tempo 
    FROM pembayaran 
    WHERE 
    month(jatuh_tempo)=month(now()) 
    AND 
    YEAR(jatuh_tempo) = year(now())) 
    and b.NISN=$nisn  ");    

$bul=mysqli_fetch_array($qu);
if($bul['sum(a.nominal)']==0){
  $po="Tidak ada tunggakan";
}elseif($bul['sum(a.nominal)']>0){
  $po=$bul['sum(a.nominal)'];
}


$n=mysqli_fetch_array($sql);
if($n['sum(a.nominal)']==0){
  $p="Tidak ada tunggakan";
}elseif($n['sum(a.nominal)']>0){
  $p=$n['sum(a.nominal)'];
}
?>

<div class="data">
<div class="card">
  <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
  <div class="in-card">
    <div class="box">
    <div class="nemu">
    <h2 ><b>SPP(Bulan Ini)</b></h2>
    <p class="tungg"><?php echo"Rp ".$po?></p>
     </div>
     <div class="op">
     <i class="fa-solid fa-dollar-sign fa-3x"></i>
    </div>
    </div>
  </div>
</div>

<div class="card">
  <!-- <img src="img_avatar.png" alt="Avatar" style="width:100%"> -->
  <div class="in-card">
    <div class="box">
    <div class="nemu">
    <h2 ><b>Total Tunggakan</b></h2>
    <p class="tungg"><?php echo"Rp ".$p?></p>
     </div>
     <div class="op">
     <i class="fa-solid fa-chart-simple fa-3x"></i>
    </div>
    </div>
  </div>
</div>
</div>

<div class="info">
<div class="head">
<h2>Detail Akun Virtual Anda</h3>
<hr>
</div>
<div class="in-info">
<div class="akun">
<h4>Bank</h5>
<p>Bank Mandiri</p>
</div>
<div class="akun">
<h4>Virtual Account</h5>
<p><?=$_SESSION['id']?></p>
</div>
<div class="akun">
<h4>Atas Nama</h5>
<p><?=$_SESSION['nama']?></p>
</div>
</div>
</div>

<div class="cara">
<div class="head-cara">
<h2>TATA CARA PEMBAYARAN</h3>
</div>
<div class="tata">
  <ul>

<li>Pembayaran dapat dilakukan melalui<b> Bank Mandiri </b>di nomor rekening <b><?=$_SESSION['id']?></b> atas nama <b><?=$_SESSION['nama']?></b></li>
<li>Jika terjadi ketidaksesuaian antara data aplikasi dengan bukti yang sebenarnya, maka segera lakukan konfirmasi kepada petugas Tata Usaha <b>(Ahmad – 085156093164)</b> dengan menunjukkan bukti maksimal dalam waktu 3 bulan dari tanggal pembayaran atau transfer. Jika konfirmasi dilakukan lebih dari waktu yang ditentukan, maka petugas TU tidak bertanggung jawab atas segala resiko akibat kesalahan.</li>
<li>Prioritas pembayaran di sistem kami adalah sebagai berikut :
<li>Tagihan Daftar Ulang (khusus bulan Juli);</li>
<li>Tagihan SPP bulan berjalan;</li>
<li>Tagihan SPP bulan-bulan sebelumnya jika ada;</li>
<li>Setelah melakukan pembayaran siswa diharapkan mengupload bukti pembayaran pada menu <a href="upload.php" style="color:#66f;">Upload Bukti Pembayaran</a></li>

</ul>
</div>
</div>

<?php
include "footer.php";
?>

<script src="app.js"></script>
</body>
</html>
<?php
}
?>