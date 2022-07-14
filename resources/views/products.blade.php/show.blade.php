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
    <h1>Detalhes do produto</h1>
    <p>{{$product->name}}</p>
    <p>{{$product->description}}</p>
    <p>R$ {{number_format($product->price, 2, ',', '.')}}</p>
    <a href="/products/edit/{{$product->id}}">Editar Produto</a>

</body>
</html>
