<?php
$num = $_GET['num'];

for ($i = 1; $i <= 10; $i++) {
    if ($i == $num) {
        continue;
    }
    echo $i . " ";
}
?>