<?php
session_start();

// Redirect if already logged in
if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit();
}

$error = "";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "webapp_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = date("d-m-Y H:i:s"); // store login time
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login Page</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
<p style="color:red;"><?php echo $error; ?></p>
</body>
</html>