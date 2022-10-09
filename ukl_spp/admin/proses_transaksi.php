<?php 
    include 'koneksi.php';
    session_start();
  if($_GET['id_pembayaran']){
    $id = $_GET['id_pembayaran'];
    $nisn = $_GET['NISN'];
    $id_pet=$_SESSION['id_petugas'];
     
    // $qry=mysqli_query($conn,"select * from petugas where username = '".$_SESSION['username']."'");
    // $dt_admin=mysqli_fetch_array($qry);
    // $id_petugas = $dt_admin['id_petugas'];
    $tgl_bayar = date('Y-m-d');

    $bayar = mysqli_query($conn ,"UPDATE pembayaran SET 
            tgl_bayar = '$tgl_bayar',
            keterangan = 'Lunas',
            id_petugas = '$id_pet' 
            WHERE id_pembayaran = '$id'");

    if($bayar){
        header('location: ../admin/search/searchspp.php?cari='.$nisn.'');
    }else{
        echo "
			<script>
			alert('gagal')
			</script>
			";
    }
}
?>