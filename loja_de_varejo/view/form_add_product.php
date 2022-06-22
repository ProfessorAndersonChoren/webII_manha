<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Novo produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../controller/Product.php" method="POST">
        <section class="m-4 columns-3">
            <article>
                <label for="name" class="cursor-pointer">Nome do produto: </label>
                <input type="text" id="name" name="name" class="border border-blue-400" required>
            </article>
            <article>
                <label for="price" class="cursor-pointer">Preço: </label>
                <input type="number" id="price" name="price" min=1 max=1000 class="border border-blue-400" required>
            </article>
            <article>
                <label for="quantity" class="cursor-pointer">Quantidade em estoque</label>
                <input type="number" name="quantity" id="quantity" class="border border-blue-400" required min=1 max=1000>
            </article>
        </section>
        <article class="flex justify-center">
            <button type="submit" class="p-3 text-white bg-blue-700 rounded">Cadastrar</button>
        </article>
    </form>
</body>

</html>