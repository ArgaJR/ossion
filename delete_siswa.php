<?php

include 'koneksi.php';
if (isset($_GET['deleteid_siswa'])) {   
    $id = $_GET['deleteid_siswa'];
    $sql = "DELETE FROM `siswa` where id_siswa= $id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header('location:siswa.php');
    } else {
        die(mysqli_error($mysqli));
}
}

?>