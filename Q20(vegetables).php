<?php
if(isset($_POST['submit'])){
    $vegetable = $_POST['vegetable'];
    $rate = $_POST['rate'];
    $qty = $_POST['qty'];
    $subtotal = $rate * $qty;

    // store in cookies
    setcookie("item_name", $vegetable, time()+3600, "/");
    setcookie("item_subtotal", $subtotal, time()+3600, "/");

    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vegetables</title>
</head>
<body>
<h2>Select a Vegetable</h2>
<form method="post">
    Vegetable:
    <select name="vegetable">
        <option value="Carrot">Carrot</option>
        <option value="Potato">Potato</option>
        <option value="Tomato">Tomato</option>
        <option value="Cabbage">Cabbage</option>
    </select><br><br>

    Rate: <input type="number" name="rate" required><br><br>
    Quantity: <input type="number" name="qty" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>