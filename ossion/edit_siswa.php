<?php

require 'koneksi.php';
 
$id = $_GET["ubahid_siswa"];
$query = tampil("SELECT * FROM siswa WHERE id_siswa ='$id'")[0];


if(isset($_POST["ubah1"])){
    if(ubahDataS($_POST, $id) >0 ){
        echo "Ubah data berhasil";
        echo '<script>window.location="siswa.php"</script>';
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
    <title>Document</title>
</head>
<body>
<form action="" method="post" class="input">

<table>
    <tr>
        <td widht="150">Nama Lengkap</td>
        <td><input type="text" name="nama" required autocomplete="off" placeholder="Masukkan nama"></td> 
    </tr>
    <tr>
        <td widht="150">Alamat</td>
        <td><input type="text" name="alm" required autocomplete="off"placeholder="Masukkan alamat"></td> 
    </tr>
    <tr>
        <td widht="150">Username</td>
        <td><input type="text" name="username" required autocomplete="off" placeholder="Masukkan uername"></td> 
    </tr>
    <tr>
        <td widht="150">Password</td>
        <td><input type="text" name="pasword" required autocomplete="off"placeholder="Masukkan pasword"></td> 
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><select name="status">
            <option value="Laki laki" selected>L</option>
            <option value="Perempuan" selected>P</option>
        </td>
    </tr>
    <tr>
        <td>

        </td>
</tr>
<tr>
    <td>Kelas</td>
    <td>
        <select name="kls" id="kls">
            <option disabled selected>Pilih Kelas</option>
            <?php 
            include "koneksi2.php";
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM kelas") or die(mysqli_error());
            while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <option value="<?php echo $data['id_kelas']; ?>"><?php echo $data['nama_kelas']; ?></option>
                <?php
            }
            ?>
        </select>
    </td>
</tr>
    <!-- <tr>
        <td>Kelas</td>
        <td><select name="kelas">
            <option value="10" selected>X SIJA 1</option>
            <option value="7" selected>X SIJA 2</option>
            <option value="11" selected>X TJAT 1</option>
            <option value="12" selected>X TJAT 2</option>
            <option value="13" selected>X TJAT 3</option>
            <option value="14" selected>X TJAT 4</option>
            <option value="15" selected>X TJAT 5</option>
        </td>
    </tr> -->
    <tr>
        <td></td>
        <td><input type="submit" value ="Ubah data" name="ubah1"></td> 
    </tr>
</body>
</html>