<?php

$colecao = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($colecao as $numero) {
    if ($numero % 2 == 0) {
        echo "<p> O número $numero é par</p>";
    }
}
