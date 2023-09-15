<?php
session_start();
unset($_SESSION['type']);
session_destroy();

echo "<script>window.location.href='index-3.php'</script>";
?>