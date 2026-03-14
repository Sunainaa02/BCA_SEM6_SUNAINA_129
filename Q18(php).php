<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "godsgift")
{
    echo "Welcome Admin!";
}
else
{
    echo "Invalid Username or Password";
    header("refresh:3; url=login.html");
}

?>