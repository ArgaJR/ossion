<html>
    <body>
        <h2   >Data Kelas</h2>
        <a href="tambahdata_kelas.php">Tambah Data</a>
        <table border="2" class="ossion">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Nama Walikelas</th>
                <th>Option</th>
            </tr>
            
            <a href="siswa.php">Data Siswa</a></li>
            <a href="admin.php">Data Admin</a></li>
            <a href="kelas.php">Data Kelas</a></li>
            <a href="izin.php">Data Izin</a></li>
        
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM kelas")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $data['id_kelas']; ?></td>
                <td><?php echo $data['nama_kelas']; ?></td>
                <td><?php echo $data['nama_walikelas']; ?></td>
                <td>
                    <a href="edit_kelas.php?ubahid_kelas=<?php echo $data['id_kelas'];?>">Ubah</a>
                    <a href="delete_kelas.php?deleteid_kelas=<?php echo $data['id_kelas']; ?>">Hapus</a>
                </td>
            </tr>

            <?php } ?>
        </table>
    </body>
 <html>