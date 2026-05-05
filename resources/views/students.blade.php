<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>Student List</h1>
    <table border="1" cellpadding="10">
        <tr style="background-color: lightgray;">
            <th>Reg No</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Course</th>
            <th>CGPA</th>
        </tr>
        @foreach($students as $student)
        <tr style="background-color: {{ $student->cgpa < 8 ? '#ffebee' : '#e8f5e9'  }};">
            <td>{{ $student->regno }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>    
            <td>{{ $student->city }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->cgpa }}</td>
        </tr>
        @endforeach
    </table>
</div>
