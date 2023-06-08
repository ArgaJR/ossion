  <h3>Tambah Data User</h3>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <form action="" method="post" class="input">

    <table>
        <tr>
            <td widht="130">Nama</td>
            <td><input type="text" name="nama" required autocomplete="off"></td> 
        </tr>
        <tr>
            <td widht="130">Username</td>
            <td><input type="text" name="username" required autocomplete="off"></td> 
        </tr>
        <tr>
            <td widht="130">Password</td>
            <td><input type="text" name="pasword" required autocomplete="off"></td> 
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value ="Simpan" name="regist"></td> 
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
    if(isset($_POST['regist']))
    mysqli_query($mysqli,"INSERT into user set
    nama_user = '$_POST[nama]',
    username = '$_POST[username]',
    pasword = '$_POST[pasword]'")

?>