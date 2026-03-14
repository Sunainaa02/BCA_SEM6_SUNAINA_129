<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$course = $_POST['course'];

echo "<h2>Registration Details</h2>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Course: " . $course . "<br>";

?>