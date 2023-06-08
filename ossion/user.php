<html>
    <body>
    <h2   >Data User</h2>
        <table border="2" class="OSSION">
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Pasword</th>
                <th>Status Izin</th>
            </tr>
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * From user")or die(mysqli_error());
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
    </body>
</html>