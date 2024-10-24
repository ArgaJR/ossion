<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="welcome">
        <h1>WELCOME</h1>
        <img src="8609147_5836-removebg-preview 2.png" alt="">
    </div>
    <div class="login">
    <h1>LOGIN</h1>
    
<form action="login_sesi.php" method="post"> 
    <table>
        <tr>
            <td>
                <label for="username"></label>
            </td>
            <td>
                <input type="text" name="username" id="username" placeholder="Masukkan username" autocomplete="off">
            </td>
        </tr>
        <tr>
        <td>
                <label for="pasword"></label>
            </td>
            <td>
                <input type="password" name="password" id="password" placeholder="Masukkan password" autocomplete="off">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="tmbl-login">LOGIN</button>
            </td>
        </tr>
    </table>
</form>
</div>
<div class="akn">
    <h5>Sudah punya akun?</h5>
    <h5><a href="tambahdata_siswa.php">Daftar sekarang</a></h5>
</div>
</body>
</html>




<?php
// include 'koneksi.php' ;

// if(isset($_POST["tmbl-login"])){
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $login = tampil("SELECT * FROM siswa WHERE username = '$username' and pasword = '$password'");
//     if($login){
//             echo "<script>alert('Selamat datang $username');
//             document.location.href = 'tambahdata_izin.php'</script>";
//         }else{
//             echo "<script>alert('Login gagal, periksa username dan password anda');
//             document.location.href = 'login.php' </script>";
//         }
//     }
?>