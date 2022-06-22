<?php
$productName = $_POST["name"];
$productPrice = $_POST["price"];
$productQuantity = $_POST["quantity"];

echo "<p>Nome do produto: $productName</p>";
echo "<p>Preço do produto: $productPrice</p>";
echo "<p>Quantidade do produto: $productQuantity</p>";