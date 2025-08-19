<?php
$celsius = isset($_GET['celsius']) ? floatval($_GET['celsius']) : 0;
$fahrenheit = ($celsius * 9/5) + 32;
echo number_format($celsius, 2) . " °C = " . number_format($fahrenheit, 2) . " °F";
?>