<?php
$arr = array(12, 45, 7, 23, 56, 9);

$max = $arr[0];
$min = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
}

echo "Greatest element: " . $max . "<br>";
echo "Smallest element: " . $min;
?>