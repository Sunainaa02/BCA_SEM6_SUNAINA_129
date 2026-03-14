<?php
if(isset($_POST['submit'])){
    $fruit = $_POST['fruit'];
    $rate = $_POST['rate'];
    $qty = $_POST['qty'];
    $subtotal = $rate * $qty;

    // store in cookies
    setcookie("item_name", $fruit, time()+3600, "/");
    setcookie("item_subtotal", $subtotal, time()+3600, "/");

    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fruits</title>
</head>
<body>
<h2>Select a Fruit</h2>
<form method="post">
    Fruit:
    <select name="fruit">
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Mango">Mango</option>
        <option value="Orange">Orange</option>
    </select><br><br>

    Rate: <input type="number" name="rate" required><br><br>
    Quantity: <input type="number" name="qty" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>