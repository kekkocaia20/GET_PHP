<?php
$prezzo = isset($_GET['prezzo']) ? floatval($_GET['prezzo']) : 0;
$sconto = isset($_GET['sconto']) ? floatval($_GET['sconto']) : 0;

$prezzo_scontato = $prezzo * (1 - $sconto / 100);

echo "Il prezzo iniziale €" . number_format($prezzo, 2) . " con lo sconto del $sconto% è di €" . number_format($prezzo_scontato, 2);
?>
