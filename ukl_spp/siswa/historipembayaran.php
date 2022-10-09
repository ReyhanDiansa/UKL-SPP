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
        <li class="navbar-dropdown active">
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
$his=mysqli_query($conn, "select * from pembayaran a join siswa b using(NISN) where keterangan like 'lunas' and NISN=$nisn ");
$row=mysqli_num_rows($his);

if($row==0){
    echo "Belum ada transaksi";
}elseif($row>0){
?>
<h2 class="title">Histori Pembayaran Anda yang Lunas</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
        <th>No</th>
        <th>Tanggal Bayar</th>
        <th>Bulan SPP</th>
        <th>Tahun SPP</th>                                      
        </tr>                    
        </thead>
        <tbody>
        <?php 

$no=0;

while($histori = mysqli_fetch_array($his)){
         include "koneksi.php";
    $no++;
?>
        <td><?=$no?></td>                   
        <td><?=$histori['tgl_bayar']?></td>                    
        <td><?=$histori['bulan_spp']?></td>                    
        <td><?=$histori['tahun_spp']?> </td>                 
              
        <tbody>
        <?php
      }
    
?>   
    </table>
</div>
<?php
      }
    
?>   

<script src="app.js"></script>
</body>
</html>

<?php
}
?>