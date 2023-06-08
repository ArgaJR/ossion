<html>
    <body>
        <h2>Data Siswa</h2>
        <a href="tambahdata_siswa.php">Tambah Data</a>
        <table border="2" class="Ossion">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nama Kelas</th>
                <th>Username</th>
                <th>Password</th>
                
            
            </tr>
            
            <a href="siswa.php">Data Siswa</a></li>
            <a href="admin.php">Data Admin</a></li>
            <a href="kelas.php">Data Kelas</a></li>
            <a href="izin.php">Data Izin</a></li>
        

        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli,"SELECT siswa.id_siswa,siswa.nama_siswa,siswa.jenis_kelamin,siswa.alamat,siswa.username,siswa.pasword,kelas.nama_kelas FROM siswa , kelas WHERE kelas.id_kelas = siswa.id_kelas;
            ")or die(mysqli_error());
            $nomer=1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $nomer++; ?></td>
                <td><?php echo $data['nama_siswa']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['nama_kelas']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['pasword']; ?></td>
                <td>
                    <a href="edit_siswa.php?ubahid_siswa=<?php echo $data['id_siswa'];?>">Ubah</a> ||
                    <a href="delete_siswa.php?deleteid_siswa=<?php echo $data['id_siswa']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
    </body>
</html>