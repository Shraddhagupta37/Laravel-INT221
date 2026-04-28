<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grocery items</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
        }
        table {
            border: 2px solid green;
            text-align: center;
            width: 60%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid green;
            padding: 8px;
        }
        th {
            background-color: #98fb98;
        }
        tr {
            background-color: antiquewhite;
        }
        h1, h3 {
            text-align: center;
        }
        div {
            text-align: center;
            margin: 5px auto auto 5px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Grocery Items with only Name and Price</h1>
        <table>
            <tr> 
                <th>Name</th>
                <th>Price</th>
            </tr>

            @foreach ($itemsNamePrice as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div>
        <h3>Total Items in the databse: {{ $count }}</h3>
        <h3>Average Price: ${{ $avgPrice }}</h3>
        <h3>Max Price: {{ $maxPrice }}, Min Price: {{ $minPrice }}</h3>
        <h3>Total Value: ${{ $totalValue }}</h3>
    </div>
</body>
</html>
