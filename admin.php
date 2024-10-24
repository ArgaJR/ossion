<html>
    <body>
        <h2   >Data admin</h2>
        <a href="tambahdata_admin.php">Tambah Data</a>
        <table border="4">
            <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Opsi</th>
                
            
            </tr>
            
            <a href="siswa.php">Data Siswa</a></li>
            <a href="admin.php">Data Admin</a></li>
            <a href="kelas.php">Data Kelas</a></li>
            <a href="izin.php">Data Izin</a></li>
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM adminn")or die(mysqli_error());
            $nomer=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $nomer++; ?></td>
                <td><?php echo $data['nama_admin']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['pasword']; ?></td>
                <td>
                    <a href="">Ubah</a> ||
                    <a href="delete_admin.php?deleteid_admin=<?php echo $data['id_admin'];?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </body>
</html>