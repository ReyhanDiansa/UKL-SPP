<?php
session_start();
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
          <img src="gambar/Profile4.svg" alt="" width="30" height="30">
          <div class="admin-info">
            <h3><?=$_SESSION['nama_petugas'] ;?></h3>
            <h5>Admin</h5>
          </div>
        </div>
        <a href="logout.php" class="log-out">
          <i class='bx bx-log-out ' ></i>
        </a>
      </div>
      <hr>
    </div>
    <!-- <h6>Navigasi</h6> -->
    <div class="sidebar-links">
    <h4 class="hide">Navigasi</h4>
      <ul>
        <div class="active-tab">
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Beranda</span>
          </a>
        </li>
        </div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="datasiswa.php" data-active="4">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Data Siswa</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="datapetugas.php" data-active="1">
            <div class="icon">
              <i class='bx bx-folder'></i>
              <i class='bx bxs-folder'></i>
            </div>
            <span class="link hide">Data Petugas</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="datakelas.php" data-active="2">
            <div class="icon">
              <i class='bx bx-message-square-detail'></i>
              <i class='bx bxs-message-square-detail'></i>
            </div>
            <span class="link hide">Data Kelas</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="0" class="ac">
          <a href="dataangkatan.php"   data-active="0">
            <div class="icon">
            <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Data Angkatan</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="0" class="ac">
          <a href="dataspp.php" class="active" data-active="0">
            <div class="icon">
            <i class='bx bx-spreadsheet'></i>
            <i class='bx bxs-spreadsheet' style='color:#ffffff' ></i>
            </div>
            <span class="link hide">Data SPP</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="0">
          <a href="transaksi.php" data-active="4">
            <div class="icon">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAUZJREFUWEftmOFRwzAMRp8moN2ADaAb0AlgBJgERmCDdgSYgBFgBNgAJhCnXtpzHSuuU3zJcfa/Xi375ZPU6oswsyUz46EB5TKSVEhVF8AVcJM7oPD7T+BVRL69uB6Qqt4BG8CgaiyDWYvIR+rwIyBVvQbea1BEZ5pK9uC9FQO9ALfdri/APrvyjgB/3MeISLJcYiC7/KILWnmyjgDZhaiqlgIdAoDZAVlH/HXKngJ171MdF6csVGhsZkrieh03NZDBH3XcENADcFnyuIV7kx3nAnltWXipu93ruAa0l6wplFNiMoW8ixtQS9mpP5CzqyEPfLKi/r9AwHLIrpxaQ+cqZNbE/Jgtmxi35148EH+YHsPJIv63N2P4VhEidbQ/oHXOwGbd58B91OT7MXccupshK21GrubEuDMRcZ22tx+5/DeFcgr9AjrQ4yWIAGKPAAAAAElFTkSuQmCC" style="width:1.3rem; margin-left:19px;"/>
            </div>
            <span class="link hide">Transaksi</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="histori.php" data-active="3">
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

    <!-- <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/face-1.png" alt="">
          <div class="admin-info">
            <h3>John Doe</h3>
            <h5>Admin</h5>
          </div>
        </div>
        <a href="#" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show">John Doe</span>
        <span>Logout</span>
      </div>
    </div> -->
  </nav>

  <?php
include "koneksi.php";
$sql=mysqli_query($conn, "select count(NISN) from pembayaran 
where 
keterangan like 'belum lunas' 
and month(jatuh_tempo) = month(now())");

$eks=mysqli_fetch_array($sql);
$juml=$eks['count(NISN)'];
if($juml==0){
  $j="Tidak ada";
}elseif($juml>0){
  $j=$eks['count(NISN)'];
}

$tahun=date('Y');
$bulan=date('m');
$que=mysqli_query($conn, "select sum(a.nominal), b.* from spp a 
join pembayaran b 
on b.id_spp=a.id_spp
where 
b.keterangan like 'belum lunas' 
and month(b.jatuh_tempo) <= $bulan and year(b.jatuh_tempo)=$tahun");

$excu=mysqli_fetch_array($que);
$jumlah=$excu['sum(a.nominal)'];
if($jumlah==0){
  $p="Tidak ada ";
}elseif($jumlah>0){
  $p="Rp ".$excu['sum(a.nominal)'] ;
}

$my=mysqli_query($conn, "select count(NISN) from siswa");

$ex=mysqli_fetch_array($my);
$banyak=$ex['count(NISN)'];
if($banyak==0){
  $l="Tidak ada Siswa";
}elseif($juml>0){
  $l=$ex['count(NISN)'];
}

$now=date('Y');
$date = date('Y', strtotime("+1 Year", strtotime("Y")));
$query=mysqli_query($conn, "select * from spp a join angkatan b using(id_angkatan) where a.tahun like'$now/$date' ");

$sql=mysqli_query($conn, "select count(id_petugas) from petugas where level like 'petugas'");

$mo=mysqli_fetch_array($sql);
$total=$mo['count(id_petugas)'];
if($total==0){
  $c="Tidak ada Petugas";
}elseif($total>0){
  $c=$mo['count(id_petugas)'];
}

?>
  <main>
  <ul class="cards">
  <li class="cards__item">
    <div class="card">
      <!-- <div class="card__image card__image--fence"></div> -->
      <div class="card__content">
        <div class="card__title">Jumlah siswa belum membayar(bulan ini)</div>
        <p class="card__text"><?php echo $j?></p>
        <!-- <button class="btn btn--block card__btn">Button</button> -->
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <!-- <div class="card__image card__image--river"></div> -->
      <div class="card__content">
        <div class="card__title">Total Tunggakan Siswa</div>
        <p class="card__text2"><?php echo $p?></p>
        <!-- <button class="btn btn--block card__btn">Button</button> -->
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <!-- <div class="card__image card__image--record"></div> -->
      <div class="card__content">
        <div class="card__title">Jumlah siswa</div>
        <p class="card__text2"><?php echo  $l?></p>
        <!-- <button class="btn btn--block card__btn">Button</button> -->
      </div>
    </div>
  </li>
  <?php
  while($arr=mysqli_fetch_array($query)){
    $h=$arr['nominal'];
    $nama=$arr['nama_angkatan'];
    ?>
  <li class="cards__item">
    <div class="card">
      <!-- <div class="card__image card__image--flowers"></div> -->
      <div class="card__content">
        <div class="card__title">Nominal SPP tahun ini(angkatan <?= $nama?>)</div>
       
        <p class="card__text"><?php echo "Rp ". $h?></p>
        <!-- <button class="btn btn--block card__btn">Button</button> -->
      </div>
    </div>
  </li>
  <?php
  }
  ?>
  <li class="cards__item">
    <div class="card">
      <!-- <div class="card__image card__image--flowers"></div> -->
      <div class="card__content">
        <div class="card__title">Tahun SPP</div>
        <p class="card__text"><?php echo "$now/$date"?></p>
        <!-- <button class="btn btn--block card__btn">Button</button> -->
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <!-- <div class="card__image card__image--river"></div> -->
      <div class="card__content">
        <div class="card__title">Jumlah Petugas</div>
        <p class="card__text2"><?php echo $c?></p>
        <!-- <button class="btn btn--block card__btn">Button</button> -->
      </div>
    </div>
  </li>
</ul>
    <p class="copyright">
      &copy; <?= date('Y')?> - <span>SPPku</span> All Rights Reserved.
    </p>
  </main>

  <script src="app.js"></script>
  
</body>

</html>
<?php
}
?>