<?php

include 'koneksi.php';
if (isset($_GET['deleteid_admin'])) {   
    $id = $_GET['deleteid_admin'];
    $sql = "DELETE FROM `admin` where id_admin= $id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header('location:admin.php');
    } else {
        die(mysqli_error($mysqli));
}
}

?>