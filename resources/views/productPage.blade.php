<html>
    <head>
        <title>Products Page</title>
        <style>
            .expensive {
                color: red;
            }

            .affordable {
                color: green;
            }

            table, th, td {
                border: 1px solid black;
                padding: 5px;
            }
        </style>
    </head>
<body>
    <div>
        <!-- It is never too late to be what you might have been. - George Eliot -->
        <h1 style="font-weight:bold">Products Page</h1>
        <p style="font-size:20px;">This is the products page.</p>

        <h2>Product Details:</h2>
        <table style="border:2px solid black; width:70%; text-align:center; border-spacing:0; border-collapse: collapse;">
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Expensive</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['stock'] }}</td>
                <td class="{{ $product['price'] > 5000 ? 'expensive' : 'affordable' }}">
                    {{ $product['price'] > 5000 ? 'Expensive' : 'Affordable' }}</span> 
                </td>
                <!-- <td><span style="color: {{ $product['price'] > 5000 ? 'red' : 'green' }};">{{ $product['price'] > 5000 ? 'Expensive' : 'Affordable' }}</span></td> -->
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
