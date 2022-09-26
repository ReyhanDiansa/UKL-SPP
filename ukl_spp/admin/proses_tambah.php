<?php
if($_POST){
    if($_POST['petugas']){
    $nama_petugas=$_POST['nama_petugas'];
    $username=$_POST['username'];
    $password= $_POST['password'];

    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    }  elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
     }elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
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
    // $username=$_POST['username'];
    $password= $_POST['password'];
    $id_kelas=$_POST['id'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    }  elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (NISN, NIS,nama,id_kelas, alamat, no_tlp, password) value ('".$nisn."','".$nis."','".$nama_siswa."','".$id_kelas."','".$alamat."','".$telp."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='datasiswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
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
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, jurusan, angkatan) value ('".$nama_kelas."','".$jurusan."','".$angkatan."')") or die(mysqli_error($conn));
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
        $insert=mysqli_query($conn,"insert into spp (angkatan, tahun, nominal) value ('".$angkatan."','".$tahun."','".$nominal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Data SPP');location.href='dataspp.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Data SPP');location.href='tambah_spp.php';</script>";
        }
    }
}
}
?>
