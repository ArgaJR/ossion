<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSSION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page1">
        <h1>WELCOME</h1>
        <img src="8609147_5836-removebg-preview 1.png" alt="" width="645px" height="426px">

        <div class="regist">
        <h3>REGISTER</h3>
        
            <form action="" method="post" class="input">

                <table>
                    <tr>
                        
                        <td><input type="text" name="nama" required autocomplete="off" placeholder="Masukkan nama"></td> 
                    </tr>
                    <tr>
                       
                        <td><input type="text" name="alm" required autocomplete="off"placeholder="Masukkan alamat"></td> 
                    </tr>
                    <tr>
                        
                        <td><input type="text" name="username" required autocomplete="off" placeholder="Masukkan username"></td> 
                    </tr>
                    <tr>
                        
                        <td><input type="text" name="pasword" required autocomplete="off"placeholder="Masukkan password"></td> 
                    </tr>

                        <p>Jenis Kelamin</p>
                        <p>Kelas</p>
               
                    <!-- <tr> -->
                        
                    <!-- <td class="jk1"> -->
                        <select name="status">
                            <option value="Laki laki" selected>L</option>
                            <option value="Perempuan" selected>P</option>
</select>
                        <!-- </td>
                        <td class="kls"> -->
                            <select name="kelas">
                            <option value="10" selected>X SIJA 1</option>
                            <option value="7" selected>X SIJA 2</option>
                            <option value="11" selected>X TJAT 1</option>
                            <option value="12" selected>X TJAT 2</option>
                            <option value="13" selected>X TJAT 3</option>
                            <option value="14" selected>X TJAT 4</option>
                            <option value="15" selected>X TJAT 5</option>
</select>
                        <!-- </td>
                    </tr> -->
                    <tr>
                        
                    <td><input type="submit" value ="Simpan" name="Daftar"></td>
                    </tr>
                    
            
            </table>
            </form>
            <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
            }
            </script>
            
            <?php
                include "koneksi.php";
                if(isset($_POST['Daftar'])){
                mysqli_query($mysqli,"INSERT into siswa set
                nama_siswa= '$_POST[nama]',
                alamat = '$_POST[alm]',
                username = '$_POST[username]',
                pasword = '$_POST[pasword]',
                jenis_kelamin = '$_POST[status]',
                id_kelas = $_POST[kelas]");
                }
            ?>
            
    
        </div>

    </div

    <!--lass="regist">
        
</div>

    
</body>
</html>