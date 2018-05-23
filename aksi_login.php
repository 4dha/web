<?php
    include 'kon.php';

    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="SELECT * FROM tb_user WHERE username='".$user."'";
    $select=mysqli_query($koneksi,$query);

    if($akun=mysqli_fetch_assoc($select)){
        $password_db=$akun['password'];

        header('location:index.php');
 } else{
     echo "Maaf, Username atau  Password yang anda masukan salah ";
     echo 'silahkan masukkan <a href="login.php"> Kembali</a>';
 }

?>