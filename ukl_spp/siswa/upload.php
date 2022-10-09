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
<main>
<div class="contain">
<div class="gambar">
 <img src="gambar/illus2.jpg" style="width:500px; height:500px;">
</div>
<div class="formulir">      
<!-- <form action="proses_upload.php" method="post"  enctype="multipart/form-data"> -->
    
    <!-- // $years = range(2015, strftime("%Y", time()));  -->
    <!-- // $date = date('M'); -->
  
   <!-- <input type="file" name="foto">
<select name="year">
  <option>Select Year</option> -->
 


		<!-- <div class="card-image">	 -->
			<!-- <h2 class="card-heading">
				Get started
				<small>Let us create your account</small>
			</h2> -->
		<!-- </div> -->
    <h3 class="judul">UPLOAD BUKTI PEMBAYARAN</h3>
  <div class="cont">
    
      <div class="button-wrap">
        <form action="proses_upload.php" method="post"  enctype="multipart/form-data" class="upload">
        
        
        <label class="button" for="upload">Upload Foto</label>
        <input id="upload" name="foto" type="file">
        <br>

        <select name="year">
<?php 
// $ang=$_SESSION['tahun_masuk'];
echo "<option>Pilih Tahun</option>";
// if($ang=='30'){
   for($i =$_SESSION['tahun_masuk'] ; $i <= date('Y'); $i++){
      echo "<option>$i</option>";
   }
  // }elseif($ang=='31'){
  //   for($i = 2021 ; $i <= date('Y'); $i++){
  //     echo "<option>$i</option>";
  //  }
  // }
?>
</select>
<select name= "month" class="form-control">
                          <option>Pilih Bulan</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                        <input type="submit" value="upload" class="button2">
  </form>
      </div>
      </div>
      </div>

</main>
<script src="app.js"></script>
</body>
</html>
<?php
    } ?>
