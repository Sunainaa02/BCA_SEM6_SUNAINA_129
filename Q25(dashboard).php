<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

// Display username and login time
$username = $_SESSION['username'];
$login_time = $_SESSION['login_time'];
$current_date = date("l, F d, Y");
?>

<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
<h2>Welcome, <?php echo $username; ?>!</h2>
<p>Login Time: <?php echo $login_time; ?></p>
<p>Current Date: <?php echo $current_date; ?></p>

<p><a href="logout.php">Logout</a></p>
</body>
</html>