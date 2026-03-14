<?php
$str = "Malayalam";

$rev = strrev($str);

if (strcasecmp($str, $rev) == 0) {
    echo "The string is a Palindrome";
} else {
    echo "The string is not a Palindrome";
}
?>