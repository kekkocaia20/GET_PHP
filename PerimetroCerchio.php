<?php
if(isset($_GET['raggio']) && is_numeric($_GET['raggio'])){
    $raggio = floatval($_GET['raggio']);
    $perimetro = 2 * pi() * $raggio;
    echo "Il perimetro del cerchio è " . number_format($perimetro, 2);
} else {
    echo "Inserisci il raggio";
}
?>