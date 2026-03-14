<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operation:
    <select name="operation">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operation'];

    switch($op)
    {
        case "add":
            $result = $a + $b;
            echo "Result: " . $result;
            break;

        case "sub":
            $result = $a - $b;
            echo "Result: " . $result;
            break;

        case "mul":
            $result = $a * $b;
            echo "Result: " . $result;
            break;

        case "div":
            if($b != 0)
                echo "Result: " . ($a / $b);
            else
                echo "Division by zero not allowed";
            break;
    }
}
?>

</body>
</html>