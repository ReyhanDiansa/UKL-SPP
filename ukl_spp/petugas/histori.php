<?php
session_start();
$id=$_SESSION['id_petugas'];
?>

<!-- <a href="tambah_siswa.php">Tambah Siswa</a> -->
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
        
        <li class="tooltip-element" data-tooltip="0">
          <a href="transaksi.php" data-active="4">
            <div class="icon">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAUZJREFUWEftmOFRwzAMRp8moN2ADaAb0AlgBJgERmCDdgSYgBFgBNgAJhCnXtpzHSuuU3zJcfa/Xi375ZPU6oswsyUz46EB5TKSVEhVF8AVcJM7oPD7T+BVRL69uB6Qqt4BG8CgaiyDWYvIR+rwIyBVvQbea1BEZ5pK9uC9FQO9ALfdri/APrvyjgB/3MeISLJcYiC7/KILWnmyjgDZhaiqlgIdAoDZAVlH/HXKngJ171MdF6csVGhsZkrieh03NZDBH3XcENADcFnyuIV7kx3nAnltWXipu93ruAa0l6wplFNiMoW8ixtQS9mpP5CzqyEPfLKi/r9AwHLIrpxaQ+cqZNbE/Jgtmxi35148EH+YHsPJIv63N2P4VhEidbQ/oHXOwGbd58B91OT7MXccupshK21GrubEuDMRcZ22tx+5/DeFcgr9AjrQ4yWIAGKPAAAAAElFTkSuQmCC" style="width:1.3rem; margin-left:19px;"/>
            </div>
            <span class="link hide">Transaksi</span>
          </a>
        </li>

        <div class="active-tab">
        <li class="tooltip-element" data-tooltip="3">
          <a href="histori.php" class="active" data-active="3">
            <div class="icon">
              <i class='bx bx-bar-chart-square'></i>
              <i class='bx bxs-bar-chart-square'></i>
            </div>
            <span class="link hide">Histori Pembayaran</span>
          </a>
        </li>
</div>
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
  <?php
        include "koneksi.php";
       $his=mysqli_query($conn, "select p.* from pembayaran p join petugas t on t.id_petugas=p.id_petugas join siswa s on s.NISN=p.NISN  where p.id_petugas=$id order by id_pembayaran desc");
       $row = mysqli_num_rows($his);
      // var_dump($row);
       if($row==0){
        echo "<h3 style='color:black;text-align:center;margin-top:50px;' > Belum ada data Pembayaran yang anda lakukan</h3>";
        // echo "<a href='tambah_petugas.php' class='button-tambah2'>+Tambah Petugas</a>";
      }elseif($row >0){
?>
                     
<!-- <h2>Pembayaran yang anda lakukan</h2> -->
<div class="table-wrapper">
<h3>Pembayaran yang anda lakukan</h3>

    <table class="fl-table">
        <thead>
        <tr>
        <th> No </th>
                        
                            <th> NISN </th>                            
                            <th> Tanggal Bayar </th>
                            <th> Bulan SPP </th>
                            <th> Tahun SPP </th>                                     
        </tr>                    
        </thead>
        <tbody>
        <?php 
        // include "koneksi.php";
        // $sql = mysqli_query($conn, "SELECT A.nama_kelas FROM kelas A JOIN siswa B ON A.id_kelas=B.id_kelas ");



$no=0;

while($histori = mysqli_fetch_array($his)){
    $no++;
    $hapus="<td>"."<a href='hapus.php?id_pembayaran=".$histori['id_pembayaran']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-hapus'>Hapus</a>"."</td>";
    $ubah="<td>"."<a href='ubah_kelas.php?id_pembayaran=".$histori['id_pembayaran']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-ubah'>Ubah</a>"."</td>";

    // while($dt_buku=mysqli_fetch_array($sql)){
    //     $kelas=$dt_buku['nama_kelas'];
    // }
?>
                          <tr>
                            <td><?=$no?></td>
                           
                            <td><?=$histori['NISN']?></td>
                            <td><?=$histori['tgl_bayar']?></td>
                            <td><?=$histori['bulan_spp']?></td>
                            <td><?=$histori['tahun_spp']?></td>
                          </tr>

                          <?php
}
                          ?>
                        </tbody>
                      </table>
                     

</div>
<!-- <a href="tambah_kelas.php" class="button-tambah">+ Tambah Kelas</a> -->
<?php
      }
?>
  </main>

  <script src="app.js"></script>
    </body>
    </html>


          
          