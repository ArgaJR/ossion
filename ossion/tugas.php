<html>
    <head>
    <h1>Data Base OSSION</h1>
    </head>

    <body>
        <h2>Data Kelas</h2>
        <table border="2" class="ossion">
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Nama Walikelas</th>
            </tr>
        <?php
            include "belajar.php";
            $query_mysql = mysqli_query($host,"SELECT * From kelas")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $data['id_kelas']; ?></td>
                <td><?php echo $data['nama_kelas']; ?></td>
                <td><?php echo $data['nama_walikelas']; ?></td>
            </tr>
            <?php } ?>
            </table>
        <h2   >Data Siswa</h2>
        <table border="2" class="Ossion">
            <tr>
                <th>Id Siswa</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>ID Kelas</th>
            </tr>
        <?php
            include "belajar.php";
            $query_mysql = mysqli_query($host,"SELECT * From siswa")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $data['id_siswa']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama_siswa']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['id_kelas']; ?></td>
            </tr>
            <?php } ?>
            </table>
        <h2   >Data User</h2>
        <table border="2" class="OSSION">
            <tr>
                <th>Id User</th>
                <th>Nama User</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Pasword</th>
                <th>Status Izin</th>
            </tr>
        <?php
            include "belajar.php";
            $query_mysql = mysqli_query($host,"SELECT * From user")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $data['id_user']; ?></td>
                <td><?php echo $data['nama_user']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['pasword']; ?></td>
                <td><?php echo $data['status_user']; ?></td>
            </tr>
            <?php } ?>
        
            </table>
        <h2   >Data Event</h2>
        <table border="2" class="OSSION">
            <tr>
                <th>Id Event</th>
                <th>Nama Event</th>
                <th>Tanggal Event</th>
            </tr>
        <?php
            include "belajar.php";
            $query_mysql = mysqli_query($host,"SELECT * From eventss")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $data['id_event']; ?></td>
                <td><?php echo $data['nama_event']; ?></td>
                <td><?php echo $data['tanggal_event']; ?></td>
            </tr>
            <?php } ?>
            </table>
        <h2   >Data Izin</h2>
        <table border="2" class="OSSION">
            <tr>
                <th>Id Izin</th>
                <th>Keperluanr</th>
                <th>Status Izin</th>
                <th>ID Siswa</th>
                <th>ID User</th>
            </tr>
        <?php
            include "belajar.php";
            $query_mysql = mysqli_query($host,"SELECT * From izin")or die(mysqli_error());
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr>
                <td><?php echo $data['id_izin']; ?></td>
                <td><?php echo $data['keperluan']; ?></td>
                <td><?php echo $data['status_izin']; ?></td>
                <td><?php echo $data['id_siswa']; ?></td>
                <td><?php echo $data['id_user']; ?></td>
            </tr>
            <?php } ?>
            
        
        
    </body>
</html>


