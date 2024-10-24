<?php

include 'koneksi.php';
if (isset($_GET['deleteid_izin'])) {   
    $id = $_GET['deleteid_izin'];
    $sql = "DELETE FROM `izin` where id_izin= $id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header('location:izin.php');
    } else {
        die(mysqli_error($mysqli));
}
}

?>