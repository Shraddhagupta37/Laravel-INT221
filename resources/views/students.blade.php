<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <th>Reg No</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Course</th>
            <th>CGPA</th>
        </tr>
        @foreach($students as $student)
        <tr>
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
