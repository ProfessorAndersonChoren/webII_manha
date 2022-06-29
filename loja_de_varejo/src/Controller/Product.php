<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;
use APP\Model\Validation;

if (empty($_POST)) {
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$productName = $_POST["name"];
$productQuantity = $_POST["quantity"];
$productCost = $_POST["cost"];
$productProvider = $_POST["provider"];
$barCode = $_POST["barCode"];

$error = array();

if(!Validation::validateName($productName))
{
    array_push($error, 'O nome do produto deve conter ao menos 5 caracteres entre letras e números!!!');
}

if(!Validation::validateNumber($productQuantity))
{
    array_push($error, 'A quantidade em estoque deve ser superior ou igual à 1 unidade!!!');
}

if(!Validation::validateNumber($productCost))
{
    array_push($error, 'O custo de aquisição deve ser superior ou igual à R$ 0.00');
}

if(!Validation::validateBarCode($barCode))
{
    array_push($error, 'O código de barra não é válido segundo nossos parâmetros!!!');
}

if($error){ // Se o array NÃO estiver vazio
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    Redirect::redirect(
        message:'Produto cadastrado com sucesso!!!'
    );
}