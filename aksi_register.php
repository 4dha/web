<?php
    include 'kon.php';
    
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $ulang=$_POST['ulangi_password'];

    if($pass==$ulang){
        $query="INSERT INTO tb_user VALUES (NULL,'".$user."','".$pass."')";
        $insert=mysqli_query($koneksi,$query);

        if($insert){
            
            header('location:index.php');
        }else{
            echo "Pendaftaran GAGAL";
            echo '<a href="daftar.php">Kembali</a>';
        }
    }else{
        echo "Password yang anda masukkan tidak sama";
        echo '<a href="daftar.php">Kembali</a>';
    }
?>