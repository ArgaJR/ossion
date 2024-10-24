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
            <form action="" method="post" class="input">

                <table>
                    <tr>
                        <td widht="150">Nama</td>
                        <td><input type="text" name="nama" required autocomplete="off"></td> 
                    </tr>
                    <tr>
                        <td widht="150">No Telp</td>
                        <td><input type="text" name="no" required autocomplete="off"></td> 
                    </tr>
                    <tr>
                        <td widht="150">Username</td>
                        <td><input type="text" name="username" required autocomplete="off"></td> 
                    </tr>
                    <tr>
                        <td widht="150">Password</td>
                        <td><input type="text" name="pasword" required autocomplete="off"></td> 
                    </tr>
                    <tr>
                        <td></td>
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
                if(isset($_POST['Daftar']))
                mysqli_query($mysqli,"INSERT into user set
                no_telp = '$_POST[no]',
                nama_user = '$_POST[nama]',
                username = '$_POST[username]',
                pasword = '$_POST[pasword]'")
            ?>
    </div>
    </div>
</body>
</html>