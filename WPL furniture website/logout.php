<?php
session_start();
$_SESSION['logout_success'] = true;
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>