<?php
// IF/ELSE - Switch - 

// IF -> Executado sempre que "TRUE"
// ELSE -> Executado sempre que "FALSE"

// Operadores relacionais

$maiorQue = 6 > 3; // True
$menorQue = 6 < 3; // False
$maiorOuIgualA = 7 >= 7; // True
$menorOuIgualA = 8 <= 10; // True
$igualA = 5 == 8; // False
$diferente = 6 <> 9; // True
$tambemDiferente = 5 != 8;  // True
$outroDiferente = 1 === "1"; // False
$outroDiferente = 1 !== "1"; // True

// var_dump($outroDiferente);

// var_dump($igualA);

// $booleano = (bool)""; // Cast explicito

// var_dump($booleano);

// if($booleano){
//     echo "Verdade";
// }else{
//     echo "Falso";
// }

// Operadores lógicos - Comparações entre booleanos
// && (Conjunção) -> true == true gera "true", senão "false"
// || (Disjunção) -> false == false gera "false", senão gera "true"
// ! Negação -> Inversão do valor booleano

$idade = 17;
$acompanhado = true;

// Verificar liberação para entrar na festa
// if ($idade >= 18 && !$acompanhado) {
//     echo "Seja Bem-vindo!!!";
// } else if ($idade >= 16 && $acompanhado) {
//     echo "Sejam bem-vindos!!!";
// } else {
//     echo "Lamento, você não pode entrar!!!";
// }

$idade = 34;
$eMenor = !($idade >= 18); // Falso

var_dump($eMenor);