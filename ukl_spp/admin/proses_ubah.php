<?php
session_start();
error_reporting(E_ERROR | E_PARSE);


if($_POST){
    if($_POST['siswa']){
        include "koneksi.php"; 
        $qry_get_siswa=mysqli_query($conn,"select * from siswa where NISN = '".$_POST['NISN']."'");
        while($op=mysqli_fetch_array($qry_get_siswa)){
            $ok=$op['NISN']; 
            $ol=$op['NIS'];
            $oh=$op['no_tlp']; 
        }
    $id=$_POST['id']; 
    $nisn=$_POST['NISN'];
    $nis=$_POST['NIS'];
    $alamat=$_POST['alamat'];
    $nama_siswa=$_POST['nama_siswa'];
    $telp=$_POST['telp'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }  elseif(empty($nisn)){
        echo "<script>alert('NISN tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }  elseif(empty($nis)){
        echo "<script>alert('NIS tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }  elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }  elseif(empty($telp)){
        echo "<script>alert('No Telepon tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }elseif(empty($id_kelas)){
        echo "<script>alert('Kelas tidak boleh kosong');location.href='ubah_siswa.php';</script>";
    }
     else {
        include "koneksi.php";   
        // $update=mysqli_query($conn,"update siswa set NIS='".$nis."',nama='".$nama_siswa."',id_kelas='".$id_kelas."',alamat='".$alamat."',no_tlp='".$telp."' where NISN= '".$ok."'") or die(mysqli_error($conn));
    
                        // echo "<script>alert('Sukses update siswa');location.href='datasiswa.php';</script>";
                        if(empty($password)){
                           
                                $update=mysqli_query($conn,"update siswa set NISN = '".$nisn."', NIS='".$nis."',nama='".$nama_siswa."',id_kelas='".$id_kelas."',alamat='".$alamat."',no_tlp='".$telp."' where id=$id") or die(mysqli_error($conn));

                    }elseif($password){
                        
                        $update=mysqli_query($conn,"update siswa set NIS='".$nis."',nama='".$nama_siswa."',id_kelas='".$id_kelas."',alamat='".$alamat."',no_tlp='".$telp."', password='".md5($password)."'where id=$id") or die(mysqli_error($conn));
                    }
    
                 
                    if($update){
                        echo "<script>alert('Sukses update siswa');location.href='datasiswa.php';</script>";
                    }
                    else {
                        echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?id_siswa=".$id_siswa."';</script>";
                    } 
                }
}elseif ($_POST['petugas']) {
        $nama_petugas=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id_petugas'];
        if(empty($nama_petugas)){
            echo "<script>alert('nama petugas tidak boleh kosong');location.href='ubah_petugas.php';</script>";
        }elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='ubah_spetugas.php';</script>";
        }else {
            if(empty($password)){
            include "koneksi.php";
                $update=mysqli_query($conn,"update petugas set  nama_petugas='".$nama_petugas."', username='".$username."'  where id_petugas = '".$id."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update petugas');location.href='datapetugas.php';</script>";
                } else {
                    echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id."';</script>";
                }
             }else{
                include "koneksi.php";
                $update=mysqli_query($conn,"update petugas set  nama_petugas='".$nama_petugas."', username='".$username."', password='".md5($password)."'  where id_petugas = '".$id."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update petugas');location.href='datapetugas.php';</script>";
                } else {
                    echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id."';</script>";
                }
             }
            }
    }elseif ($_POST['kelas']) {
        $nama_kelas=$_POST['nama_kelas'];
        $jurusan=$_POST['jurusan'];
        $angkatan=$_POST['angkatan'];
        $id=$_POST['id_kelas'];
        if(empty($nama_kelas)){
            echo "<script>alert('nama kelas tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        }elseif(empty($jurusan)){
            echo "<script>alert('jurusan tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        }elseif(empty($angkatan)){
            echo "<script>alert('angkatan tidak boleh kosong');location.href='ubah_kelas.php';</script>";
        }
        else {
            include "koneksi.php";
                $update=mysqli_query($conn,"update kelas set  nama_kelas='".$nama_kelas."', id_angkatan='".$angkatan."', jurusan='".$jurusan."'  where id_kelas = '".$id."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses ubah kelas');location.href='datakelas.php';</script>";
                } else {
                    echo "<script>alert('Gagal ubah kelas');location.href='ubah_kelas.php?id_kelas=".$id."';</script>";
                }
            }
    }elseif ($_POST['spp']) {
        $angkatan=$_POST['angkatan'];
        $tahun=$_POST['tahun'];
        $nominal=$_POST['nominal'];
        $id=$_POST['id_spp'];
        if(empty($angkatan)){
            echo "<script>alert('angkatan tidak boleh kosong');location.href='ubah_spp.php';</script>";
        }elseif(empty($tahun)){
            echo "<script>alert('jurusan tidak boleh kosong');location.href='ubah_spp.php';</script>";
        }elseif(empty($nominal)){
            echo "<script>alert('nominal tidak boleh kosong');location.href='ubah_spp.php';</script>";
        }
        else {
            include "koneksi.php";
                $update=mysqli_query($conn,"update spp set  id_angkatan='".$angkatan."', tahun='".$tahun."', nominal='".$nominal."'  where id_spp = '".$id."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses ubah data spp');location.href='dataspp.php';</script>";
                } else {
                    echo "<script>alert('Gagal ubah data spp');location.href='ubah_spp.php?id_kelas=".$id."';</script>";
                }
            }
    }elseif ($_POST['angkatan']) {
        $angkatan=$_POST['nama_ang'];
        $th_masuk=$_POST['tahun'];

        // $tahun=$_POST['tahun'];
        // $nominal=$_POST['nominal'];
        $id=$_POST['id_ang'];
        if(empty($angkatan)){
            echo "<script>alert('nama angkatan tidak boleh kosong');location.href='ubah_angkatan.php';</script>";
        }
        else {
            include "koneksi.php";
                $update=mysqli_query($conn,"update angkatan set  nama_angkatan='".$angkatan."', tahun_masuk= '".$th_masuk."' where id_angkatan = '".$id."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses ubah data angkatan');location.href='dataangkatan.php';</script>";
                } else {
                    echo "<script>alert('Gagal ubah data angkatan');location.href='ubah_angkatan.php?id_kelas=".$id."';</script>";
                }
            }
    }
}

?>

