<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fasilitas</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="keperluan" placeholder="Keperluan">
        <br>
        <select name="status" id="status">
            <option value="sakit">Sakit</option>
            <option value="izin">Izin</option>
        </select>
        <br>
        <input type="file" name="bukti">
        <br>
        <input type="submit" value="Tambah" name="submit">
    </form>

    <?php
    include("koneksi.php");

    if(isset($_POST['submit'])){
        $kprln = $_POST['keperluan'];
        $status = $_POST['status'];
        $file = $_FILES['bukti'];

        $filename = $file['name']; 
        $tmp_name = $file['tmp_name'];

        $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed_extensions = array('jpg', 'png', 'jpeg');

        if(!in_array($file_extension, $allowed_extensions)){
            echo 'Format File Tidak Diizinkan';
        }else{
            $newname = 'gambar' . time() . '.' . $file_extension;
            $destination = './gambar/' . $newname;

            if(move_uploaded_file($tmp_name, $destination)){
                $insert = mysqli_query($mysqli, "INSERT INTO izin (keperluan, status_izin, bukti_izin) VALUES (
                    '".$kprln."',
                    '".$status."',
                    '".$newname."')");

                if($insert){
                    echo '<script>alert("Berhasil")</script>';
                    echo '<script>window.location="tambah.php"</script>';
                }else {
                    echo '<script>alert("Gagal Ditambahkan")</script>';
                }
            }else{
                echo 'Gagal memindahkan file';
            }
        }
    }
    ?>
