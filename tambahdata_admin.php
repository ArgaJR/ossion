<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Admin</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Admin</td>
                <td><input type="text" name="namadmn" autocomplete="off" id="namadmn" placeholder="Masukkan nama admin" required=""></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user" autocomplete="off" id="user" placeholder="Masukkan username admin" required=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="pass" autocomplete="off" id="pass" placeholder="Masukkan password admin" required=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="up" value="Tambah"></td>
            </tr>

        </table>
    </form>
    <?php
    include "koneksi.php";
    if (isset($_POST['up'])) {
    $namaAdmin = $_POST['namadmn'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    $query = "INSERT INTO adminn (nama_admin, username, pasword) VALUES ('$namaAdmin', '$username', '$password')";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Terjadi kesalahan saat menambahkan data: " . mysqli_error($mysqli);
    }
}







?>
</body>
</html>