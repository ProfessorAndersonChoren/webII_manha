<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;

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
