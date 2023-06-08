<?php

require 'koneksi.php';
 
$id = $_GET["ubahid_kelas"];
$query = tampil("SELECT * FROM kelas WHERE id_kelas ='$id'")[0];


if(isset($_POST["ubah"])){
    if(ubahDataK($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="kelas.php"</script>';
    }else{
        echo '<script>alert("Gagal mengubah")</script>';
}
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ubah Data Kelas</title>
    </head>
    <body>
        <h1>Ubah Data Kelas</h1>
        <form action="" method="post">
            <label for="namakls">Nama Kelas : </label>
            <input type="text" name="namakls" id="namakls" autocomplete="off" placeholder="Masukan Nama ..." value="<?= $query["nama_kelas"];?>"><br>
            <label for="namawlks">Nama Walikelas : </label>
            <input type="text" name="namawlks" id="alamat" autocomplete="off" placeholder="Masukan Nama Walikelas ..." value="<?= $query["nama_walikelas"];?>"><br>
            <button type="submit" name="ubah">Ubah Data</button>
        </form>
    </body>
    </html>