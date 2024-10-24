
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="up">
        <h1>ONLINE PERMISSION</h1>
    </div>

    <div class="anjay">
        
    <ul>
    <h1>OSSION</h1>
        <li><a href="kelas2.php">Data Kelas</a></li>
        <li><a href="tambahdata_izin.php">Pengajuan Izin</a></li>
        <li><a href="login2.php">Admin</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </div>

<h3>Tambah Data Izin</h3>
  <head>
  </head>
  <form action="" method="post" class="input" enctype="multipart/form-data">

    <table>
        <tr>
            <td widht="130">Keperluan</td>
            <td><input type="text" name="keperluan" required autocomplete="off"></td> 
        </tr>
        <tr>
            <td>Status izin</td>
            <td>
                <select name="status">
                    <option value="sakit">SAKIT</option>
                    <option value="izin">IZIN</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Pilih gambar</label>
                <input class="file" type="file" name="gambar"><br><br> 
            </td>       
        </tr>
        
        <tr>
            <td></td>
            <td><input class="aku" type="submit" value ="Tambah" name="regist"></td> 
        </tr>
    </table>
</form>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<?php
    include "koneksi.php";
    session_start();    
    if(isset($_POST['regist'])) {
        $keperluan = $_POST['keperluan'];
        $status = $_POST['status'];
        $id_siswa = $_SESSION['id_siswa'];
        
        $file = $_FILES['gambar'];
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed_extensions = array('jpg', 'png', 'jpeg');

        if (in_array($file_extension, $allowed_extensions)) {
            $targetDirectory = 'gambarizin/'; 
            $Filegambar = uniqid('file_') . '.' . $file_extension;
            $targetFile = $targetDirectory . $Filegambar;
            
            if (move_uploaded_file($tmp_name, $targetFile)) {
                mysqli_query($mysqli, "INSERT INTO izin (id_izin, keperluan, status_izin,id_siswa, bukti_izin) VALUES (NULL,'$keperluan', '$status','$id_siswa','$Filegambar')");
                echo "Data izin berhasil ditambahkan.";
            } else {
                echo "Terjadi kesalahan saat mengunggah file.";
            }
        } else {
            echo "Ekstensi file yang diunggah tidak diizinkan. Harap unggah file dengan ekstensi JPG, JPEG, atau PNG.";
        }
    } 
?>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:login.php");
    exit();
}
?>
</body>
</html>
