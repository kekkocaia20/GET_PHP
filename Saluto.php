<?php
if (isset($_GET['nome'])) {
    $nome = ($_GET['nome']);
    $orario = date("H:i");
    echo "Ciao $nome, sono le $orario";
} else {
    echo "Inserisci il tuo nome via GET.";
}
?>
