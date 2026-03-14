<?php
if(isset($_POST['submit'])){
    $vegetable = $_POST['vegetable'];
    setcookie("selected_item", $vegetable, time() + 3600, "/");
    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select a Vegetable</title>
</head>
<body>

<h2>Select a Vegetable</h2>

<form method="post">
    <select name="vegetable">
        <option value="Carrot">Carrot</option>
        <option value="Potato">Potato</option>
        <option value="Tomato">Tomato</option>
        <option value="Cabbage">Cabbage</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>