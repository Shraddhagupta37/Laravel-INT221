<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <h1 style="font-weight:bold">Passing Data from Controller to View</h1>
    <p style="font-size:20px;">Passed data:</p>
    <ul>
        <li>Name: {{ $name }}</li>
        <li>Age: {{ $age }}</li>
    </ul>

    <br><br>
    <p>In Table format:</p>
    <table style="border:1px solid black; width:50%; text-align:center;">
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $age }}</td>
        </tr>
    </table>
</div>
