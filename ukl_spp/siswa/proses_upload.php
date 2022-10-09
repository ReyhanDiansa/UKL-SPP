<?php 
// if($_POST){
include 'koneksi.php';
// $nama_buku = $_POST['nama_buku'];
// $deskripsi = $_POST['desk'];
// $pengarang = $_POST['pengarang'];
$tahun2=$_POST['month'];
$tahun=date('Y');
$bulan=date('M');
$year=$_POST['year'];
session_start();
$nisn=$_SESSION['NISN'];
 
$ekstensi =  array('png','jpg','jpeg','gif','JPG');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:upload.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $filename;
        include "koneksi.php";
		move_uploaded_file($_FILES['foto']['tmp_name'], 'bukti/'.$filename);
		$update=mysqli_query($conn,"update pembayaran set foto_bukti='".$xx."' where NISN=$nisn and bulan_spp=$tahun2 and tahun_spp=$year") or die(mysqli_error($conn));
		// $insert(mysqli_query($conn, "insert into bukti_bayar ()"))
		echo "<script>alert('Sukses menambahkan bukti');location.href='upload.php';</script>";
	}else{
		echo "<script>alert('Gagal menambahkan bukti');location.href='upload.php';</script>";
	}
}
// }
?>