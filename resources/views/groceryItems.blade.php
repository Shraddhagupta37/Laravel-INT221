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
    </style>
</head>
<body>
    <div style="text-align: center;">
        <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
        <h1>Grocery Items</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ $item->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
