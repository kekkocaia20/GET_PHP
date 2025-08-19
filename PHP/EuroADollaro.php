<?php
$euro = isset($_GET['euro']) ? floatval($_GET['euro']) : 0;
$tasso_cambio = 1.16;
$dollaro = $euro * $tasso_cambio;
echo number_format($euro, 2) . " € = " . number_format($dollaro, 2) . " $";
?>
