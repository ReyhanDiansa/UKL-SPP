<?php
session_start();
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
            <h3><?= $_SESSION['nama_petugas']?></h3>
            <h5>Admin</h5>
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
          <a href="index.php" data-active="1">
            <div class="icon">
            <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Beranda</span>
          </a>
        </li>
        <div class="active-tab">
        <li class="tooltip-element" data-tooltip="0" class="ac">
          <a href="datasiswa.php" class="active" data-active="0">
            <div class="icon">
            <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Data Siswa</span>
          </a>
        </li>
        </div>
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
          <a href="dataspp.php" class="active" data-active="0">
            <div class="icon">
            <i class='bx bx-spreadsheet'></i>
            <i class='bx bxs-spreadsheet' style='color:#ffffff' ></i>
            </div>
            <span class="link hide">Data SPP</span>
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
        <div class="tooltip">
          <span class="show">Dashboard</span>
          <span>Projects</span>
          <span>Messages</span>
          <span>Analytics</span>
        </div>
      </ul>

      <h4 class="hide">Shortcuts</h4>

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
      </ul>
    </div>

   
  </nav>


  <main>
  <?php
        include "koneksi.php";
       $his=mysqli_query($conn, "select * from siswa order by nama asc");
       $row = mysqli_num_rows($his);
      // var_dump($row);
       if($row==0){
        echo "<h3 style='color:black;text-align:center;' >  Tidak ada Data Siswa</h3>";
        echo "<a href='tambah_siswa.php' class='button-tambah2'>+Tambah Siswa</a>";
      }elseif($row >0){
?>
                     
<!-- <h2>Responsive Table</h2> -->
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>                   
        <th>Kelas</th>                     
        <th>Ubah</th>
        <th>Hapus</th>                                        
        </tr>                    
        </thead>
        <tbody>
        <?php 
        include "koneksi.php";
        $sql = mysqli_query($conn, "SELECT A.nama_kelas FROM kelas A JOIN siswa B ON A.id_kelas=B.id_kelas ");



$no=0;

while($histori = mysqli_fetch_array($his)){
    $no++;
    $hapus="<td>"."<a href='hapus.php?NISN=".$histori['NISN']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-hapus'>Hapus</a>"."</td>";
    $ubah="<td>"."<a href='ubah_siswa.php?NISN=".$histori['NISN']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-ubah'>Ubah</a>"."</td>";

    while($dt_buku=mysqli_fetch_array($sql)){
        $kelas=$dt_buku['nama_kelas'];
    }
?>
        <td><?=$no?></td>
        <td><?=$histori['NISN']?></td>
        <td><?=$histori['NIS']?> </td>                    
        <td><?=$histori['nama']?></td>                    
        <td><?=$histori['alamat']?></td>                    
        <td><?=$histori['no_tlp']?> </td>                    
         <td><?=$kelas.$ubah.$hapus?></td>  
              
        <tbody>
        <?php
      }
    
?>   
    </table>
</div>
<a href="tambah_siswa.php" class="button-tambah">+ Tambah Siswa</a>
<?php
      }
?>
  </main>

  <script src="app.js"></script>
    </body>
    </html>


          