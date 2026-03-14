<?php
if(isset($_COOKIE['item_name']) && isset($_COOKIE['item_subtotal'])){
    $item = $_COOKIE['item_name'];
    $subtotal = $_COOKIE['item_subtotal'];

    // For demo purpose, total = subtotal (can add multiple items if needed)
    $total = $subtotal;

    echo "<h2>Selected Item Details</h2>";
    echo "Item: " . $item . "<br>";
    echo "Subtotal: " . $subtotal . "<br>";
    echo "Total: " . $total;
} else {
    echo "<h2>No item selected. Please go back and select a fruit or vegetable.</h2>";
}
?>