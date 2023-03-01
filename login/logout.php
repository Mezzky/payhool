<?php
session_start();
$_SESSION = [];
session_destroy();
session_unset();
echo " <script>
alert('Berhasil Logout');
window.location.href = 'login.php';
</script>"; 
?>
