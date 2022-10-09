<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if($_POST){
    if($_POST['petugas']){
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    include "koneksi.php";
    $his=mysqli_query($conn, "select username from petugas where level like 'admin'");
    $row=mysqli_fetch_array($his);
    // $row = mysqli_num_rows($his);

    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    }elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    }elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    }elseif($row['username']==$username){
        echo "<script>alert('username telah ada');location.href='tambah_petugas.php';</script>";
    }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas(username, password, nama_petugas, level) value ('".$username."','".md5($password)."','".$nama_petugas."', 'petugas')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='datapetugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
    }
}elseif($_POST['siswa']){
    $nama_siswa=$_POST['nama_siswa'];
    $nisn=$_POST['NISN'];
    $nis=$_POST['NIS'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $id_spp = $_POST['id_spp'];
    $id_ang=$_POST['id_ang'];
    $awaltempo = $_POST['jatuh_tempo'];
    // $id_pet=$_SESSION['id_petugas'];
   $random=rand();
   include "koneksi.php";
   $sql=mysqli_query($conn, "select * from siswa");
   $ex=mysqli_fetch_array($sql);
   
   


    // $username=$_POST['username'];
    $password= $_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    }  elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }  elseif(empty($nisn)){
        echo "<script>alert('NISN tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }  elseif(empty($nis)){
        echo "<script>alert('NIS tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }  elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }  elseif(empty($telp)){
        echo "<script>alert('No Telepon tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($id_spp)){
        echo "<script>alert('Tahun tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }  elseif(empty($awaltempo)){
        echo "<script>alert('tanggal jatuh tempo tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }  elseif(empty($id_kelas)){
        echo "<script>alert('Kelas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    }
     else {
        if($nisn==$ex['NISN']){
        echo "<script>alert('NISN sudah ada');location.href='tambah_siswa.php';</script>";
        }elseif($nis==$ex['NIS']){
            echo "<script>alert('NIS sudah ada');location.href='tambah_siswa.php';</script>";
        }else{
        include "koneksi.php";
        $sql = "insert into siswa (nisn, nis, nama, id_kelas, alamat,password, no_tlp,id) values ('" . $nisn . "', '" . $nis . "', '" .$nama_siswa . "', '" .$id_kelas . "', '" .$alamat . "','".md5($password)."', '" .$telp . "',  '" .$random . "');";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "<script>alert('Gagal tambah siswa');location.href='tambah_siswa.php';</script>";
        }else{
            $query=mysqli_query($conn, "select * from spp a join angkatan b on b.id_angkatan=a.id_angkatan where a.tahun like '$id_spp' and b.id_angkatan=$id_ang");
   while($eks=mysqli_fetch_array($query)){
    $id_spp2=$eks['id_spp'];
   }
        for($i=0; $i<12; $i++){
        $jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));
 		$bulan     = date("m" ,strtotime($jatuhtempo));
        $tahun = date("Y", strtotime($jatuhtempo));
        
        $add = mysqli_query($conn,"INSERT INTO pembayaran(nisn , jatuh_tempo, bulan_spp, id_spp, tahun_spp, keterangan) 
        VALUES ('$nisn','$jatuhtempo','$bulan','$id_spp2', '$tahun', 'belum lunas')");
        echo "<script>alert('Sukses Tambah Siswa');location.href='datasiswa.php';</script>";           
        }
        // if($insert&&$add){
        //     echo "<script>alert('Sukses menambahkan siswa');location.href='datasiswa.php';</script>";
        // } else {
        //     echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        // }
    
}
     }
     }
}elseif($_POST['kelas']){
    $nama_kelas=$_POST['nama_kelas'];
        $jurusan=$_POST['jurusan'];
        $angkatan=$_POST['angkatan'];

        if(empty($nama_kelas)){
            echo "<script>alert('nama kelas tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        }elseif(empty($jurusan)){
            echo "<script>alert('jurusan tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        }elseif(empty($angkatan)){
            echo "<script>alert('angkatan tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        }else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, jurusan, id_angkatan) value ('".$nama_kelas."','".$jurusan."','".$angkatan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas');location.href='datakelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
        }
    }
}elseif($_POST['spp']){
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    if(empty($angkatan)){
        echo "<script>alert('angkatan tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }elseif(empty($tahun)){
        echo "<script>alert('jurusan tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }elseif(empty($nominal)){
        echo "<script>alert('nominal tidak boleh kosong');location.href='tambah_spp.php';</script>";
    }
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into spp (id_angkatan, tahun, nominal) value ('".$angkatan."','".$tahun."','".$nominal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Data SPP');location.href='dataspp.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Data SPP');location.href='tambah_spp.php';</script>";
        }
    }
}elseif($_POST['angkatan']){
    $angkatan=$_POST['nama_ang'];
    $th_masuk=$_POST['tahun'];

    if(empty($angkatan)){
        echo "<script>alert('nama angkatan tidak boleh kosong');location.href='tambah_angkatan.php';</script>";
    }elseif(empty($th_masuk)){
        echo "<script>alert('Tahun masuk tidak boleh kosong');location.href='tambah_angkatan.php';</script>";
    }
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into angkatan (nama_angkatan, tahun_masuk) value ('".$angkatan."', '".$th_masuk."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Data angkatan');location.href='dataangkatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Data angkatan');location.href='tambah_angkatan.php';</script>";
        }
    }
}elseif($_POST['pembayaran']){
    $id_spp = $_POST['id_spp'];
    $id_ang=$_POST['id_ang'];
    $awaltempo = $_POST['jatuh_tempo'];
    $nisn=$_POST['nisn'];

    if(empty($id_ang)){
        echo "<script>alert('nama angkatan tidak boleh kosong');location.href='tambah_angkatan.php';</script>";
    }
    elseif(empty($id_spp)){
        echo "<script>alert('Tahun SPP tidak boleh kosong');location.href='tambah_angkatan.php';</script>";
    }
    elseif(empty($id_ang)){
        echo "<script>alert('nama angkatan tidak boleh kosong');location.href='tambah_angkatan.php';</script>";
    }
    else {
        include "koneksi.php";
        $query=mysqli_query($conn, "select * from spp a join angkatan b on b.id_angkatan=a.id_angkatan where a.tahun like '$id_spp' and b.id_angkatan=$id_ang");
   while($eks=mysqli_fetch_array($query)){
    $id_spp2=$eks['id_spp'];
   }
        for($i=0; $i<12; $i++){
        $jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));
 		$bulan     = date("m" ,strtotime($jatuhtempo));
        $tahun = date("Y", strtotime($jatuhtempo));
        
        $add = mysqli_query($conn,"INSERT INTO pembayaran(nisn , jatuh_tempo, bulan_spp, id_spp, tahun_spp, keterangan) 
        VALUES ('$nisn','$jatuhtempo','$bulan','$id_spp2', '$tahun', 'belum lunas')");
        echo "<script>alert('Sukses Tambah Siswa');location.href='transaksi.php';</script>";           
        }
        if($insert){
            echo "<script>alert('Sukses menambahkan Data angkatan');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Data angkatan');location.href='tambah_pembayaran.php';</script>";
        }
    }
}
}
?>
