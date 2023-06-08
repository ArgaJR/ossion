<?php

include 'koneksi.php';
if (isset($_GET['deleteid_kelas'])) {   
    $id = $_GET['deleteid_kelas'];
    $sql = "DELETE FROM `kelas` where id_kelas= $id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header('location:kelas.php');
    } else {
        die(mysqli_error($mysqli));
}
}

?>