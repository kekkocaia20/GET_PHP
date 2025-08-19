<?php
if (isset($_GET['nome'], $_GET['cognome'], $_GET['anno'])) {
    $nome = strtoupper(substr($_GET['nome'], 0, 3));       // prime 3 lettere del nome
    $cognome = strtoupper(substr($_GET['cognome'], 0, 3)); // prime 3 lettere del cognome
    $anno = substr($_GET['anno'], -2);                     // ultime 2 cifre anno

    $cf = $cognome . $nome . $anno;

    echo "Codice fiscale semplificato: $cf";
} else {
    echo "Inserisci nome, cognome e anno.";
}
?>
