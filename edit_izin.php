<?php
require 'koneksi.php';

$id = $_GET["ubahid_izin"];
$query = tampil("SELECT * FROM izin WHERE id_izin ='$id'")[0];

if(isset($_POST["ganti"])){
    $keperluan = $_POST['keperluan'];
    $status = $_POST['status'];
    
    // Memeriksa apakah ada file gambar yang diunggah
    if(isset($_FILES['gambar']) && $_FILES['gambar']['name'] != '') {
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
                // Mengupdate data izin beserta gambar
                mysqli_query($mysqli, "UPDATE izin SET keperluan='$keperluan', status_izin='$status', bukti_izin='$Filegambar' WHERE id_izin=$id");
                echo "Ubah data berhasil";
                echo '<script>window.location="izin.php"</script>';
            } else {
                echo '<script>alert("Terjadi kesalahan saat mengunggah file.")</script>';
            }
        } else {
            echo '<script>alert("Ekstensi file yang diunggah tidak diizinkan. Harap unggah file dengan ekstensi JPG, JPEG, atau PNG.")</script>';
        }
    } else {
        // Mengupdate data izin tanpa gambar
        mysqli_query($mysqli, "UPDATE izin SET keperluan='$keperluan', status_izin='$status' WHERE id_izin=$id");
        echo "Ubah data berhasil";
        echo '<script>window.location="izin.php"</script>';
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
    <form action="" method="post" class="input" enctype="multipart/form-data">
        <table>
            <tr>
                <td widht="130">Keperluan</td>
                <td><input type="text" name="keperluan" value="<?php echo $query['keperluan']; ?>" required autocomplete="off"></td> 
            </tr>
            <tr>
                <td>Status izin</td>
                <td>
                    <select name="status">
                        <option value="sakit" <?php if($query['status_izin'] == 'sakit') echo 'selected'; ?>>S</option>
                        <option value="izin" <?php if($query['status_izin'] == 'izin') echo 'selected'; ?>>I</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pilih gambar:</label><br>
                    <input type="file" name="gambar"><br><br> 
                </td>       
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value ="Ubah" name="ganti"></td> 
            </tr>
        </table>
    </form>
</body>
</html>
