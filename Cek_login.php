<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database 
include 'Koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){

    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
   header("location:admin/admin.php");

// cek jika user login sebagai pegawai
}else if($data['level']=="operator"){
   // buat session login dan username
   $_SESSION['username'] = $username;
   $_SESSION['level'] = "operator";
   // alihkan ke halaman dashboard pegawai
  header("location:operator/operator.php");

  // cek jika user login sebagai siswa
  }else if($data['level']=="siswa"){
   // buat session login dan username
   $_SESSION['username'] = $username;
   $_SESSION['level'] = "siswa";
   // alihkan ke halaman dashboard siswa
  header("location:siswa/siswa.php");

// cek jika user login sebagai guru
  }else if($data['level']=="guru"){
   // buat session login dan username
   $_SESSION['username'] = $username;
   $_SESSION['level'] = "guru";
   // alihkan ke halaman dashboard guru
  header("location:guru/guru.php");

// cek jika user login sebagai kepsek
  }else if($data['level']=="kepsek"){
   // buat session login dan username
   $_SESSION['username'] = $username;
   $_SESSION['level'] = "kepsek";
   // alihkan ke halaman dashboard kepsek
  header("location:kepsek/kepsek.php");

// cek jika user login sebagai orangtua
  }else if($data['level']=="orangtua"){
   // buat session login dan username
   $_SESSION['username'] = $username;
   $_SESSION['level'] = "orangtua";
   // alihkan ke halaman dashboard orangtua
  header("location:orangtua/orangtua.php");


}else{

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
}


}else{
   header("location:index.php?pesan=gagal");
}



 ?>
