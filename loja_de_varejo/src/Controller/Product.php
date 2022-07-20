<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Model\DAO\ProductDAO;
use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Product;
use APP\Model\Provider;
use PDOException;

if (empty($_GET['operation'])) {
    Redirect::redirect(message: 'Nenhuma operação foi informada!!!', type: 'error');
}

switch ($_GET['operation']) {
    case 'insert':
        insertProduct();
        break;
    case 'list':
        listProducts();
        break;
    default:
        Redirect::redirect(message: 'Operação informada é inválida!!!', type: 'error');
}

function insertProduct()
{
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

    if (!Validation::validateName($productName)) {
        array_push($error, 'O nome do produto deve conter ao menos 5 caracteres entre letras e números!!!');
    }

    if (!Validation::validateNumber($productQuantity)) {
        array_push($error, 'A quantidade em estoque deve ser superior ou igual à 1 unidade!!!');
    }

    if (!Validation::validateNumber($productCost)) {
        array_push($error, 'O custo de aquisição deve ser superior ou igual à R$ 0.00');
    }

    if (!Validation::validateBarCode($barCode)) {
        array_push($error, 'O código de barra não é válido segundo nossos parâmetros!!!');
    }

    if ($error) { // Se o array NÃO estiver vazio
        Redirect::redirect(
            message: $error,
            type: 'warning'
        );
    } else {
        $product = new Product(
            name: $productName,
            barCode: $barCode,
            fixedCost: 0.5,
            cost: $productCost,
            tributes: 0.75,
            quantity: $productQuantity,
            provider: new Provider()
        );
        $dao = new ProductDAO();
        try {
            $result = $dao->insert($product);
        } catch (PDOException $e) {
            Redirect::redirect(message: 'Lamento, houve um erro inesperado na execução do sistema!!!', type: 'error');
            // Tratar de notificar a equipe
            // $e->getMessage();
        }
        if ($result)
            Redirect::redirect(
                message: 'Produto cadastrado com sucesso!!!'
            );
        else
            Redirect::redirect(
                message: 'Não foi possível cadastrar o produto!!!',
                type: 'error'
            );
    }
}
function listProducts()
{
    $dao = new ProductDAO();
    try {
        $products = $dao->findAll();
    } catch (PDOException $e) {
        Redirect::redirect(message: 'Lamento, houve um erro inesperado na execução do sistema!!!', type: 'error');
    }
    session_start();
    if ($products) {
        $_SESSION['list_of_products'] = $products;
        header("location:../View/list_of_products.php");
    } else {
        Redirect::redirect(message: ['Não existem produtos cadastrados no sistema!!!'], type: 'warning');
    }
}
