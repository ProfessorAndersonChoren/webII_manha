<?php

namespace APP\Controller;

use APP\Model\Address;
use APP\Model\Validation;
use APP\Model\Provider;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;

if (empty($_POST)) {
    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'

    );
}
$name = $_POST["name"];
$cnpj = $_POST["cnpj"];
$publicPlace = $_POST["publicPlace"];
$streetNumber = $_POST["streetNumber"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

$error = array();

if (!Validation::validateName($name)) {
    array_push($error, 'O nome do fornecedor deve conter ao menos 4 caracteres entre letras e números!!!');
}

if (!Validation::validateCnpj($cnpj)) {
    array_push($error, 'O cnpj deve conter ao menos 13 caracteres e números!!!');
}

if (!Validation::validateName($publicPlace)) {
    array_push($error, 'O nome deve conter ao menos 5 caracteres e números!!!');
}
if (!Validation::validateNumber($streetNumber)) {
    array_push($error, 'O numero da rua deve conter ao menos 2 caracteres e números!!!');
}
if (!Validation::validateName($neighborhood)) {
    array_push($error, 'o bairro deve conter ao menos 5 caracteres e números!!!');
}
if (!Validation::validateName($city)) {
    array_push($error, 'a cidade deve conter ao menos 5 caracteres e números!!!');
}
if (!Validation::validateName($postalCode)) {
    array_push($error, 'O cnpj deve conter ao menos 13 caracteres e números!!!');
}

if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $address = new Address(
        publicPlace: $publicPlace,
        streetNumber: $streetNumber,
        neighborhood: $neighborhood,
        city: $city,
        postalCode: $postalCode
    );
    $provider = new Provider(
        name: $name,
        cnpj: $cnpj,
        address: $address
    );


    Redirect::redirect(
        message: 'Fornecedor cadastrado com sucesso!!'
    );
}
