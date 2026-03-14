<?php
$number = 3; // user given number

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "Result Matrix:<br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $result = $number * $matrix[$i][$j];
        echo $result . " ";
    }
    echo "<br>";
}
?>