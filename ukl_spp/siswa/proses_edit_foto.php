<?php
session_start();
$nisn=$_SESSION['NISN'];
$ekstensi =  array('png','jpg','jpeg','gif','JPG');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	// echo "<script>alert('Ekstensi salah');location.href='profile.php';</script>";
}else{
	if($ukuran < 1044070){		
		$xx = $filename;
        include "koneksi.php";
		move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$filename);
		$update=mysqli_query($conn,"update siswa set foto_siswa ='".$xx."' where NISN=$nisn ") or die(mysqli_error($conn));
		// $insert(mysqli_query($conn, "insert into bukti_bayar ()"))
		echo "<script>alert('Sukses edit foto');location.href='profile.php';</script>";
	}else{
		echo "<script>alert('Gagal edit foto');location.href='profile.php';</script>";
	}
}
?>