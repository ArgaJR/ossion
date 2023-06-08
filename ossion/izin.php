<link rel="stylesheet" href="style3.css">
<html>
    <body>
        <div class="logo">
            <h1>OSSION</h1>
        </div>
        <h2>Data Izin</h2>
        <div class="data">
        <a href="tambahdata_izin.php">Tambah Data</a>
        </div>
        <table border="2" class="ossion">
            <tr>
                <th>No</th>
                <th>Keperluan</th>
                <th>Status Izin</th>
                <th>Nama Siswa</th>
                <th>Bukti Izin</th>
                <th>Opsi</th>
            </tr>
            <div class="adm">
            <a href="siswa.php">Data Siswa</a>
            <a href="admin.php">Data Admin</a>
            <a href="kelas.php">Data Kelas</a>
            <a href="izin.php">Data Izin</a>
        
            </div>
            
        
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli, "SELECT izin.id_izin, izin.keperluan, izin.status_izin, siswa.nama_siswa, izin.bukti_izin FROM izin, siswa WHERE siswa.id_siswa = izin.id_siswa") or die(mysqli_error());
            $nomer = 1;
            while($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr class="dt">
                <td><?php echo $nomer++; ?></td>
                <td><?php echo $data['keperluan']; ?></td>
                <td><?php echo $data['status_izin']; ?></td>
                <td><?php echo $data['nama_siswa']; ?></td>
                <td><img src="/ossion/gambarizin/<?php echo $data['bukti_izin']; ?>" alt="" width="100" height="100"></td>
                <td>
                    <a href="edit_izin.php?ubahid_izin=<?php echo $data['id_izin']; ?>">Ubah</a> ||
                    <a href="delete_izin.php?deleteid_izin=<?php echo $data['id_izin']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>
