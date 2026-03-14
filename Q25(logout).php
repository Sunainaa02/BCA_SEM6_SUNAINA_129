<?php
session_start();
session_destroy(); // clear session
header("Location: login.php");
exit();
?>