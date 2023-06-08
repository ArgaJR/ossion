<?php
$databaseHost = "localhost";
$databaseName = "OSSION";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

function tampil($query) {
    global $mysqli;
    $result = mysqli_query($mysqli, $query);
    $rows = [];

    while($data = mysqli_fetch_assoc($result)) {
        $rows[] = $data;
    }

    return $rows;

}
function ubahDataK($data, $id) {
    global $mysqli ;
    $nama = $data ["namakls"];
    $walikelas = $data ["namawlks"];

    mysqli_query($mysqli, " UPDATE kelas SET nama_kelas = '$nama', nama_walikelas = '$walikelas' WHERE id_kelas = '$id'");

    return mysqli_affected_rows($mysqli);
}
function tambahDataK($data){ 
    global $mysqli;
    $kelas = $data ['namakls'];
    $wali = $data ['namawlks'];

    mysqli_query($mysqli, "INSERT INTO kelas VALUES ('','$kelas','$wali')");

    return mysqli_affected_rows($mysqli);
}

function ubahDataI($data, $id){
    global $mysqli;
    $nama = $data["nama"];
    $keperluan = $data["keperluan"];
    $statusizin = $data["status"];
    $gambardulu = $data["gambar"];

    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambardulu;
    } else {
        $tmp_name = $_FILES["gambar"]["tmp_name"];
        $targetFile = "gambarizin/" . ($_FILES["gambar"]["name"]);
        $gambar = move_uploaded_file($tmp_name, $targetFile);
        if (file_exists('gambarizin/' . $gambardulu)) {
            unlink('gambarizin/' . $gambardulu);
        }
    }

    mysqli_query($mysqli, "UPDATE izin SET nama = '$nama', keperluan = '$keperluan', status_izin = '$statusizin', bukti_izin = '$gambardulu' WHERE id_izin = '$id'");

    return mysqli_affected_rows($mysqli);
}
function ubahDataS($data,$id){ 
    global $mysqli;
    $nama = $data ['nama'];
    $alamat = $data ['alm'];
    $username = $data ['username'];
    $pass = $data ['pasword'];
    $jeniskelamin = $data['status'];
    $kelas = $data['kls'];

    mysqli_query($mysqli, "UPDATE siswa SET  nama_siswa = '$nama', alamat = '$alamat', username = '$username', pasword = '$pass', jenis_kelamin = '$jeniskelamin', id_kelas = '$kelas' WHERE id_siswa = '$id'");

    return mysqli_affected_rows($mysqli);
}
?>

