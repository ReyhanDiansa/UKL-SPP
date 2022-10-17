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

   
  </nav>


  <main>
  <form  action="search/searchsis.php" method="get" class="search">
                  <input type="text"  name="cari" placeholder="Cari siswa">
                </form>
  <?php
        include "koneksi.php";
       $his=mysqli_query($conn, "select * from siswa a join kelas b on b.id_kelas=a.id_kelas order by b.nama_kelas asc limit 20");
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
        <th>Tunggakan</th>                     
        <th>Ubah</th>
        <th>Hapus</th>                                        
        </tr>                    
        </thead>
        <tbody>
        <?php 




$no=0;
$tahun=date('Y');
$bulan=date('m');
while($histori = mysqli_fetch_array($his)){
         include "koneksi.php";
         $que=mysqli_query($conn, "select sum(a.nominal), b.* from spp a 
join pembayaran b 
on b.id_spp=a.id_spp
where 
b.keterangan like 'belum lunas' 
and month(b.jatuh_tempo) <= $bulan and year(b.jatuh_tempo)=$tahun and NISN=$histori[NISN]");
while($rd=mysqli_fetch_array($que)){
  $jum=$rd['sum(a.nominal)'];
  
  if($jum==0){
    $p="Tidak ada ";
  }elseif($jum>0){
    $p="Rp ".$rd['sum(a.nominal)'] ;
  } 
}
        // $sql = mysqli_query($conn, "SELECT A.nama_kelas FROM kelas A JOIN siswa B ON A.id_kelas=B.id_kelas ");
    $no++;
    // $hapus="<td>"."<a href='hapus.php?NISN=".$histori['NISN']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-hapus'>Hapus</a>"."</td>";
    $ubah="<td>"."<a href='ubah_siswa.php?NISN=".$histori['NISN']."'  class='button-ubah'>Ubah</a>"."</td>";
    $hapus="<td><a href='hapus.php?NISN=$histori[NISN]' onclick='return confirm(\"Apakah anda yakin menghapus data ini?\")' class='button-hapus'>Hapus</a></td>";
?>
        <td><?=$no?></td>
        <td><?=$histori['NISN']?></td>
        <td><?=$histori['NIS']?> </td>                    
        <td><?=$histori['nama']?></td>                    
        <td><?=$histori['alamat']?></td>                    
        <td><?=$histori['no_tlp']?> </td>
        <td><?=$histori['nama_kelas']?> </td>                    
        <td><?=$p.$ubah.$hapus?> </td>                    
              
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


          