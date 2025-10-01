<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Restaurant App</h1>

    <table>
        <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Price</th>
            <th>Cost Price</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->cost_price }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>