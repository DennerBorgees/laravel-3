<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tst</title>
</head>
<body>
        <a href = "/products/create">Criar novo Produto</a>

<ul>
    @foreach($products as $product)
        <li>{{ $product->name }} -  R$ {{ $product->price }}</li>
        <a href="/products/show/{{$product->id}}">Ver Mais</a>
    @endforeach
</ul>
</body>
</html>
