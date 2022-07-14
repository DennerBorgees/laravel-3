<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <h1>Criar Produto</h1>
    <form action="/products/store" method="post">
        @csrf
        <input name="name" placeholder="Nome">
        <input name="description" placeholder="Descrição">
        <input type="number" name="price" placeholder="Preço">
        <button type="submit">Criar Produto</button>
    </form>
</body>
</html>
