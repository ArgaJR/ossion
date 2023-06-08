<?php

session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql_login = "SELECT * FROM siswa where username = '$username' and pasword = '$password'";
$login = mysqli_query($mysqli, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){
    $_SESSION['id_siswa'] = $data['id_siswa']; 
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['pasword'];
    echo "<script>
            alert('Login berhasil, Selamat Datang $username');
            document.location = 'tambahdata_izin.php';
        </script>";
}else{
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login.php';
        </script>";

}

?>