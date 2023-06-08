<link rel="stylesheet" href="style2.css">
<html>
    <body>
    <div class="up">
        <h1>ONLINE PERMISSION</h1>
    </div>

    <div class="anjay">
        
    <ul>
    <h1>OSSION</h1>
        <li><a href="kelas2.php">Data Kelas</a></li>
        <li><a href="tambahdata_izin.php">Pengajuan Izin</a></li>
        <li><a href="login2.php">Admin</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </div>
        <h2>Data Kelas</h2>
        <table border="2" class="ossion" width="200">
          <div class="kelass">
          <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Nama Walikelas</th>
            </tr>
          </div>  
        <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM kelas")or die(mysqli_error());
            $nomer = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>

            <tr width="20px" height="20px">
                <td><?php echo $nomer++ ?></td>
                <td><?php echo $data['nama_kelas']; ?></td>
                <td><?php echo $data['nama_walikelas']; ?></td>
            </tr>

            <?php } ?>
        </table>
    </body>
 <html>