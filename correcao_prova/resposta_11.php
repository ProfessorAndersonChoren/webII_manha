<?php

$colecao = [1, 2, 3, 4, 5];

$invertido = versao_tres($colecao);

print_r($invertido);

function versao_um(array $colecao): array
{
    $aux = [];
    $numero = count($colecao);
    for ($numero; $numero > 0; $numero--) {
        array_push($aux, "<p>$numero<p>");
    }
    return $aux;
}

function versao_dois(array $colecao)
{
    $aux = [];
    foreach ($colecao as $numero) {
        array_unshift($aux, "<p>$numero<p>");
    }
    return $aux;
}

function versao_tres(array $colecao)
{
    return array_reverse($colecao);
}
