<?php
if(isset($_GET['base'], ($_GET['altezza'])) && is_numeric($_GET['base']) && is_numeric($_GET['altezza'])){
    $base = floatval($_GET['base']);
    $altezza = floatval($_GET['altezza']);
    $area = $base * $altezza;
    echo "L'area del rettangolo è " . number_format($area, 2);
} else {
    echo "Inserisci base o altezza";
}
?>