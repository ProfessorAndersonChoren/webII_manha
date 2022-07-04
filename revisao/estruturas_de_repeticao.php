<?php

// While, Do While, For e ForEach (Arrays)

$contagem = 11;
// while ($contagem < 10) { // Enquanto for verdade
//     echo "Atualmente estamos no valor $contagem<br>";
//     $contagem++; // O valor acrecido de 1
// }

// do {
//     echo "Atualmente estamos no valor $contagem<br>";
//     $contagem++; // O valor acrecido de 1
// } while ($contagem < 10); // Enquanto for verdade

// for ($count = 0; $count < 10;$count++){
//     echo "Atualmente estamos no valor $count<br>";
// }

$alunos = array("Samara", "Kailany");
$professores = ["Anderson", "Barcado"];

// for ($i = 0; $i < count($alunos); $i++) {
//     echo "Nome: " . $alunos[$i] . "<br>";
// }

// foreach($alunos as $nome){
//     echo "Nome: $nome <br>";
// }

// foreach($professores as $prof){
//     echo "Nome: $prof <br>";
// }
// printData($alunos);
// array_push($alunos, "Diego"); // Adiciona no final
// printData($alunos);

// printData($alunos);
// array_unshift($alunos, "Eliseu"); // Adicionar no início
// printData($alunos);

// printData($alunos);
// array_pop($alunos); // Remover do final
// printData($alunos);

// printData($alunos);
// array_shift($alunos); // Remover do início
// printData($alunos);

printData($alunos);
$alunos = removerAluno("Samara", $alunos); // Remover a Samara
printData($alunos);

function printData(array $data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function removerAluno(string $aluno,array $dados):array
{
    $aux = array();
    foreach($dados as $nome){
        if($nome != $aluno){
            array_push($aux, $nome);
        }
    }
    return $aux;
}
