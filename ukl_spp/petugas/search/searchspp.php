<?php
session_start();

      if ($_GET) {
        $search = $_GET['cari'];
        // $search2=$_POST['cari2'];
        include "koneksi.php";
        // $ru=mysqli_query($conn, "select nama_produk from produk");

          if(isset($_GET['cari'])){
          include "koneksi.php";
          $his = mysqli_query($conn, "select * from siswa where NISN like '$search'");
          $f=mysqli_fetch_array($his);
          $row = mysqli_num_rows($his);
          if ($row > 0) {
           

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
<nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="./img/logo.png" class="logo" alt="">
      <h3 class="hide">SPPku</h3>
    </div>
    <div class="sidebar-footer">
      <!-- <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a> -->
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="../gambar/Profile4.svg" alt="" width="30" height="30">
          <div class="admin-info">
            <h5><?=$_SESSION['nama_petugas']?></h5>
            <h6>Petugas</h6>
          </div>
        </div>
        <a href="logout.php" class="log-out">
          <i class='bx bx-log-out ' ></i>
        </a>
      </div>
      <hr>
    </div>
    <div class="sidebar-links">
    <h4 class="hide">Navigasi</h4>
      <ul>
    
      <li class="tooltip-element" data-tooltip="1">
          <a href="home.php" class="active"data-active="1">
            <div class="icon">
            <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Beranda</span>
          </a>
        </li>
        <div class="active-tab">
        <li class="tooltip-element" data-tooltip="0">
          <a href="transaksi.php" class="active" data-active="4">
            <div class="icon">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAUZJREFUWEftmOFRwzAMRp8moN2ADaAb0AlgBJgERmCDdgSYgBFgBNgAJhCnXtpzHSuuU3zJcfa/Xi375ZPU6oswsyUz46EB5TKSVEhVF8AVcJM7oPD7T+BVRL69uB6Qqt4BG8CgaiyDWYvIR+rwIyBVvQbea1BEZ5pK9uC9FQO9ALfdri/APrvyjgB/3MeISLJcYiC7/KILWnmyjgDZhaiqlgIdAoDZAVlH/HXKngJ171MdF6csVGhsZkrieh03NZDBH3XcENADcFnyuIV7kx3nAnltWXipu93ruAa0l6wplFNiMoW8ixtQS9mpP5CzqyEPfLKi/r9AwHLIrpxaQ+cqZNbE/Jgtmxi35148EH+YHsPJIv63N2P4VhEidbQ/oHXOwGbd58B91OT7MXccupshK21GrubEuDMRcZ22tx+5/DeFcgr9AjrQ4yWIAGKPAAAAAElFTkSuQmCC" style="width:1.3rem; margin-left:19px;"/>
            </div>
            <span class="link hide">Transaksi</span>
          </a>
        </li>
          </div>
        
        <li class="tooltip-element" data-tooltip="3">
          <a href="histori.php" class="active" data-active="3">
            <div class="icon">
              <i class='bx bx-bar-chart-square'></i>
              <i class='bx bxs-bar-chart-square'></i>
            </div>
            <span class="link hide">Histori Pembayaran</span>
          </a>
        </li>

        <!-- <div class="tooltip">
          <span class="show">Dashboard</span>
          <span>Projects</span>
          <span>Messages</span>
          <span>Analytics</span>
        </div> -->
      </ul>

      <!-- <h4 class="hide">Shortcuts</h4>

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" data-active="4">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="5">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Help</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="6">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Settings</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Tasks</span>
          <span>Help</span>
          <span>Settings</span>
        </div>
      </ul> -->
    </div>
  </nav>


  <main>
  <h3>Transaksi Pembayaran SPP</h3>
<form method="get"  action="searchspp.php">
	 <input type="number" name="cari" placeholder="cari NISN"/>
	<!-- <input type="submit" name="cari" value="Cari " /> -->
</form>
<?php
$sq=mysqli_query($conn, "select * from siswa a join kelas b on b.id_kelas=a.id_kelas where a.NISN=$f[NISN] order by nama asc ");
$t=mysqli_fetch_array($sq);
?>

<h3>Biodata Siswa</h3>
<table>
	<tr>
		<td>NISN</td>
		<td>:</td>
		<td><?php echo $f['NISN']; ?></td>
	</tr>
	<tr>
		<td>Nama Siswa</td>
		<td>:</td>
		<td><?php echo $f['nama']; ?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $t['nama_kelas']; ?></td>
	</tr>
</table>

<h3>Tagihan SPP Siswa</h3>
<div class="table-wrapper">
  <table class="fl-table">
      <thead>
      <tr>
      <th>No</th>
      <th>Bulan</th>                     
      <th>Tahun</th>                     
      <th>Bukti Bayar</th>                     
      <th>Nominal</th>
      <th>Bayar</th>
      </tr>                    
      </thead>
      <tbody>
	<?php
    include "koneksi.php";
	$sql = mysqli_query($conn, "SELECT * FROM pembayaran WHERE NISN='$f[NISN]' ORDER BY jatuh_tempo ASC");
  $b=mysqli_query($conn, "select * from spp a join pembayaran b on b.id_spp=a.id_spp");
  while($d=mysqli_fetch_array($b)){
    $nominal=$d['nominal'];
  }
	$no=0;
	while($d=mysqli_fetch_array($sql)){
$bulan=$d['bulan_spp'];
$tahun=$d['tahun_spp'];

if($d['foto_bukti']==null){
 $bukti="-";
}else{
 $bukti="<span class='tampil-gambar' data-src='../../siswa/bukti/$d[foto_bukti]' alt='foto bukti'>Lihat Foto</span>";
}


    include "koneksi.php";
    $no++;
    if($d['keterangan']=='lunas'){
      $bayar="<td>"."<img src='../gambar/lunas.png' style='width:40px; heigth:40px;'>"."</td>";
    }elseif($d['keterangan']=='belum lunas'){
    $bayar="<td>"."<a href='../proses_transaksi.php?id_pembayaran=$d[id_pembayaran]&NISN=$d[NISN]'  class='button-pay'>Bayar</a>"."</td>";
    }
?>

        <td><?=$no?></td>
        <td><?=$bulan?></td>                    
        <td><?=$tahun?></td>
        <td><?=$bukti?></td>       
        <td><?=$nominal.$bayar?></td>                                        
        <tbody>
        <?php
    
}
?>
</table>

<div id="myModal" class="modal">

<!-- // The Close Button  -->
<span class="close">&times;</span>

<!-- // Modal Content (The Image)  -->
<img class="modal-content" id="img01">

</div>


  </main>

  <script src="app.js"></script>
  <script src="../app.js"></script>

    </body>
    </html>
    <?php
  
          }elseif($row==0){
            header('location: searchemptyspp.php');
          }
          }
}
          
        
?>


          