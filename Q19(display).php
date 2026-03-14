<?php
if(isset($_COOKIE['selected_item'])){
    echo "<h2>You selected: " . $_COOKIE['selected_item'] . "</h2>";
} else {
    echo "<h2>No item selected. Please go back and select a fruit or vegetable.</h2>";
}
?>