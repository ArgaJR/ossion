<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post"> 
    <table>
        <tr>
            <td>
                <label for="username"></label>
            </td>
            <td>
                <input type="text" name="username2" id="username" placeholder="Masukkan username" autocomplete="off">
            </td>
        </tr>
        <tr>
        <td>
                <label for="pasword"></label>
            </td>
            <td>
                <input type="password" name="password2" id="password" placeholder="Masukkan password" autocomplete="off">
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
</body>
</html>
<?php

include "koneksi.php";

$username = $_POST['username2'];
$password = $_POST['password2'];

$sql_login = "SELECT * FROM adminn where username = '$username' and pasword = '$password'";
$login = mysqli_query($mysqli, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){
    echo "<script>
            alert('Login berhasil, Selamat Datang $username2');
            document.location = 'izin.php';
        </script>";
}else{
    echo "<script>
            alert('Login Failed, check username and password');
            document.location = 'login2.php';
        </script>";
}

?>