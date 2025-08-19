<?php
if (isset($_GET['numero']) && is_numeric($_GET['numero'])) {
    $numero = intval($_GET['numero']);
    if ($numero % 2 == 0) {
        echo "Il numero $numero è pari!";
    } else {
        echo "Il numero $numero è dispari!";
    }
} else {
    echo "Non hai inserito un numero valido.";
}
?>
