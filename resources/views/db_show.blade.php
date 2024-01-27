<table border="2px" style="min-width: 350px">
    <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Desc</th>
    </tr>
    @foreach ($student_data as $student)
        <tr>
            <td>{{ $loop->iteration  }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->role }}</td>
            <td>{{ $student->desc }}</td>
        </tr>
        
    @endforeach
</table>