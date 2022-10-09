<?php
session_start();
include "koneksi.php";


if($_POST['siswa']){
             $nisn = $_POST['nisn'];
            $password = $_POST['password'];
            $q = mysqli_query($conn, "select * from siswa where NISN='" . $nisn . "' and password='" .md5($password)."'");
            $r = mysqli_fetch_array($q);
            if (mysqli_num_rows($q) > 0) {
            $_SESSION['NISN'] = $r['NISN'];
            $_SESSION['nama'] = $r['nama'];
            $_SESSION['alamat'] = $r['alamat'];
            // $_SESSION['id_angkatan'] = $r['']
     include "koneksi.php";       
     $sql=mysqli_query($conn, "select * from angkatan a join kelas b using(id_angkatan) join siswa c using(id_kelas) where c.NISN=$_SESSION[NISN]");
    //  $sql=mysqli_query($conn, "select * from spp a join kelas b using(id_angkatan) join siswa c using(id_kelas) where c.NISN=$_SESSION[NISN]");
     while($p=mysqli_fetch_array($sql)){
     
          $_SESSION['id_angkatan']=$p['id_angkatan'];
          $_SESSION['nama_angkatan']=$p['nama_angkatan'];
          $_SESSION['tahun_masuk']=$p['tahun_masuk'];
     }
            // $virt=rand();
            $_SESSION['id']=$r['id'];
            // $_SESSION['password'] = $r['password'];
            $_SESSION['status_login'] = true;
            header('location:../siswa/dashboard.php');
        }else{
            echo "<script>alert('niss dan password salah');location.href='login.php';</script>";
        }
    }
   elseif($_POST['admin']){
        $username=$_POST['username'];
        $password = $_POST['password'];
        $q2 = mysqli_query($conn, "select * from petugas where username='" . $username . "' and password='" .md5($password) . "'");
       $row = mysqli_fetch_array($q2);
        if (mysqli_num_rows($q2) > 0) {
        $_SESSION['id_petugas'] = $row['id_petugas'];
        $_SESSION['nama_petugas'] = $row['nama_petugas'];
        $_SESSION['username'] = $row['username'];
        // $_SESSION['password'] = $row['password'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['status_login'] = true;
        if($_SESSION['level']=="admin"){
        header('location:../admin/index.php');
        }elseif ($_SESSION['level']=="petugas") {
        header('location:../petugas/home.php');
        }
    }else{
        echo "<script>alert('username dan password salah');location.href='loginadmin.php';</script>";
    } 
    }

 ?>