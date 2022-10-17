<?php 
    if($_GET['NISN']){
        include "koneksi.php";
        $hapus="delete from siswa where NISN ='".$_GET['NISN']."'";
        
        $hasil =mysqli_query($conn,$hapus);

        
        if($hasil ){
        include "koneksi.php";
            echo "<script>alert('Sukses hapus siswa');location.href='datasiswa.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus siswa');location.href='datasiswa.php';</script>";
        }
    }elseif($_GET['id_petugas']){
        include "koneksi.php";
        $hapus="delete from petugas where id_petugas ='".$_GET['id_petugas']."'";
        
        $hasil =mysqli_query($conn,$hapus);

        
        if($hasil ){
        include "koneksi.php";
            echo "<script>alert('Sukses hapus petugas');location.href='datapetugas.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus petugas');location.href='datapetugas.php';</script>";
        }
    }elseif($_GET['id_kelas']){
        include "koneksi.php";
        $hapus="delete from petugas where id_kelas ='".$_GET['id_kelas']."'";
        
        $hasil =mysqli_query($conn,$hapus);

        
        if($hasil ){
        include "koneksi.php";
            echo "<script>alert('Sukses hapus kelas');location.href='datakelas.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus kelas');location.href='datakelas.php';</script>";
        }
    }elseif($_GET['id_spp']){
        include "koneksi.php";
        $hapus="delete from spp where id_spp ='".$_GET['id_spp']."'";
        
        $hasil =mysqli_query($conn,$hapus);

        
        if($hasil ){
        include "koneksi.php";
            echo "<script>alert('Sukses hapus data SPP');location.href='dataspp.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data SPP');location.href='dataspp.php';</script>";
        }
    }elseif($_GET['id_angkatan']){
        include "koneksi.php";
        $hapus="delete from angkatan where id_angkatan ='".$_GET['id_angkatan']."'";
        
        $hasil =mysqli_query($conn,$hapus);

        
        if($hasil ){
        include "koneksi.php";
            echo "<script>alert('Sukses hapus data angkatan');location.href='dataangkatan.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus data angkatan');location.href='dataangkatan.php';</script>";
        }
    }
?>