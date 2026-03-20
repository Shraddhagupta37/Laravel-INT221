<html>
    <head>
        <title>Results Page</title>
        <style>
            table, th, td {
                border: 1px solid black;
                padding: 5px;
            }
        </style>
    </head>
<body>
<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1>Results</h1>
    <table style="border:solid black 2px; border-collapse:collapse; width:50%; text-align:center; border-spacing:0;">
        <tr>
            <th>Roll No.</th>
            <th>Name</th>
            <th>CGPA</th>
            <th>Status</th>
        </tr>

        @foreach ($students as $student)
            <tr style="background-color: {{ $student['cgpa'] > 6.5 ? 'green' : 'red' }};">
                <td>{{ $student['roll'] }}</td>
                <td>{{ $student['name'] }}</td>
                <td>{{ $student['cgpa'] }}</td>
                <td>
                    {{ $student['cgpa'] > 6.5 ? 'Pass' : 'Fail' }}
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>