<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg">
        <h1>WELCOME</h1>
        <img src="8609147_5836-removebg-preview 2.png" alt="">
    </div>
    <div class="bg2">
        <h1>REGISTER</h1>
        <div class="input-group">
            <form action="login.php" method="post" class="input">

                <table>
                    <tr>
                        <td widht="150"></td>
                        <td><input type="text" name="nama" required autocomplete="off" placeholder="Masukkan nama"></td> 
                    </tr>
                    <tr>
                        <td widht="150"></td>
                        <td><input type="text" name="alm" required autocomplete="off"placeholder="Masukkan alamat"></td> 
                    </tr>
                    <tr>
                        <td widht="150"></td>
                        <td><input type="text" name="username" required autocomplete="off" placeholder="Masukkan username"></td> 
                    </tr>
                    <tr>
                        <td widht="150"></td>
                        <td><input type="text" name="pasword" required autocomplete="off"placeholder="Masukkan password"></td> 
                    </tr>
                    <tr>
                        <td></td>
                        <td><select name="status">
                            <option value="Laki laki" selected>L</option>
                            <option value="Perempuan" selected>P</option>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td></td>
                        <td>
                            <select name="kls" id="kls">
                                <option disabled selected>Pilih Kelas</option>
                                <?php 
                                include "koneksi2.php";
                                $query_mysql = mysqli_query($mysqli, "SELECT * FROM kelas") or die(mysqli_error());
                                while ($data = mysqli_fetch_array($query_mysql)) {
                                    ?>
                                    <option value="<?php echo $data['id_kelas']; ?>"><?php echo $data['nama_kelas']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
</tr>

                    </tr>
                    <tr>
                    <td></td>
                    <a href="login.php"><td><input type="submit" value ="Buat" name="Daftar"></td> </a>
                    </tr>
            
            </table>
            </form>
            <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
            }
            </script>
            
            <?php
                include "koneksi2.php";
                if(isset($_POST['Daftar'])){
                mysqli_query($mysqli,"INSERT into siswa set
                nama_siswa= '$_POST[nama]',
                alamat = '$_POST[alm]',
                username = '$_POST[username]',
                pasword = '$_POST[pasword]',
                jenis_kelamin = '$_POST[status]',
                id_kelas = '$_POST[kls]'");
                }
            ?>
            
    </div>
    </div>
</body>
</html>