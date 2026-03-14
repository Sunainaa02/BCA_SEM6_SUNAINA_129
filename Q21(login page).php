<?php
session_start(); // start session

// Check if user is already logged in
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
    exit();
}

// Check login form submission
$error = "";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials
    if($username == "admin" && $password == "godsgift"){
        $_SESSION['username'] = $username; // store username in session
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<h2>Login</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
<p style="color:red;"><?php echo $error; ?></p>
</body>
</html>