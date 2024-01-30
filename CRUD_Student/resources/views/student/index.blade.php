<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th,tr,td{border: 1px solid black}
    img{
        width: 100px;
        height: 100px;

        }
</style>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Photo</td>
            <td>Birthyear</td>
            <td>Address</td>
            <td>Provinces_id</td>

        </tr>
    
    @foreach($student as $student)
    <form action="{{ route('student.destroy',$student->id) }}" method="post">
    @csrf
    @method('DELETE')
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td><img src="{{asset('/storage/profile/' .$student->photo)}}" class="" alt="student"></td>
        <td>{{ $student->birthyear }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->district_id }}</td>
        <td><button type="submit">Delete</button></td>
        <td><a href="{{ route('student.edit',$student->id)}}">Edit</a></td>
    </tr>
    </form>
    @endforeach
    </table>
    <a href="{{ route('student.create') }}">Add Student</a>
    <p><a href="http://127.0.0.1:8000/">Back</a></p>
</body>
</html>