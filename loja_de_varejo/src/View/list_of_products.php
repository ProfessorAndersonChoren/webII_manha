<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="bg-blue-400">
        <nav>
            <ul class="flex">
                <li>
                    <a href="../../index.html">Home</a>
                </li>
                <li>
                    <a href="form_add_product.php">Novo produto</a>
                </li>
                <li>
                    <a href="form_add_provider.php">Novo Fornecedor</a>
                </li>
                <li>
                    <a href="../controller/Product.php?operation=list">Listar produtos</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="w-2/4 m-auto mt-9">
        <table class="table">
            <thead class="text-white bg-blue-600">
                <th>Código de barra</th>
                <th>Nome do produto</th>
                <th>Preço de venda</th>
                <th>Quantidade em estoque</th>
            </thead>
            <tbody>
                <?php
                session_start();
                foreach ($_SESSION['list_of_products'] as $product) :
                ?>
                    <tr>
                        <td>
                            <?= $product['product_barcode'] ?>
                        </td>
                        <td>
                            <?= $product['product_name'] ?>
                        </td>
                        <td>
                            R$ <?= str_replace(".", ",", $product['product_price']) ?>
                        </td>
                        <td>
                            <?= $product['product_quantity'] ?>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>