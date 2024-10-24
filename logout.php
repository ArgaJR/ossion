<?php

session_start();

unset($_SESSION['id_siswa']);
unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();

echo "<script>
alert('Logout berhasil');
document.location = 'login.php';
</script>";

?>