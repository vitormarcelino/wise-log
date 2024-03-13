<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wiser Log</title>
    <style>
        body {
            font-family: Helvetica;
            display: flex;
            justify-content: center;
        }
        .content {
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Products of category: {{ $category->name }}</h3>
        <div>
        @foreach ($products as $product)
            <h3>{{ $product->name }}</h3>
            <p>Price: R$ {{ $product->price }}</p>
            <p>Category: {{ $product->category->name }}</p>
        @endforeach
        </div>

        <h1>Products upper than R$ 80.00</h3>
        @foreach ($expensiveProducts as $product)
            <h3>{{ $product->name }}</h3>
            <p>Price: R$ {{ $product->price }}</p>
            <p>Category: {{ $product->category->name }}</p>
        @endforeach

        <h2>Prime numbers less than 100</h2>
        <p>{{ $primeNumbersList }}</p>
    <div>
</body>
</html>