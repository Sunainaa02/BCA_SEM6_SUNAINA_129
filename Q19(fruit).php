<?php
// Check if form is submitted
if(isset($_POST['submit'])){
    $fruit = $_POST['fruit'];
    setcookie("selected_item", $fruit, time() + 3600, "/"); // cookie expires in 1 hour
    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select a Fruit</title>
</head>
<body>

<h2>Select a Fruit</h2>

<form method="post">
    <select name="fruit">
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Mango">Mango</option>
        <option value="Orange">Orange</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>