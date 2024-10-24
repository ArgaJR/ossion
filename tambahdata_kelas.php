<?php
    require "koneksi.php";

    if(isset($_POST["kirim"])){
        if(tambahDataK($_POST) > 0 ){
            echo "<script>
                alert('Data berhasil ditambahkan');
                window.location.href='kelas.php';
            </script>";
        }else{
            echo '<script>alert("Gagal menambahkan")</script>';
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Kelas</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Kelas</td>
                <td><input type="text" name="namakls" id="namakls" autocomplete="off" placeholder="Masukkan Nama Kelas" required=""></td>
            </tr>
            <tr>
                <td>Nama Walikelas</td>
                <td><input type="text" name="namawlks" id="namawlks" autocomplete="off" placeholder="Masukkan Nama Walikelas"></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>
