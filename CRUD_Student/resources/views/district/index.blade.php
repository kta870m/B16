<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,th,td{border: 1px solid black}
    button>a{text-decoration: none; color: black}
</style>
<body>
    <h2>District List</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>provinces_id</th>
            <th>Actions</th>
        </tr>
        @foreach($district as $districts)
        <form action="{{ route('district.destroy', $districts->id) }}" method="post">
        @csrf
        @method('DELETE')
        <tr>
            <td>{{$districts->id}}</td>
            <td>{{$districts->name}}</td>
            <td>{{$districts->provinces_id}}</td>
            <td><button type="submit" onclick="return confirm('Do you want to delete')">Delete</button></td>
            <td><button><a href="{{ route('district.edit', $districts->id) }}">Edit</a></button></td>
        </tr>
        </form>
        @endforeach
    </table>
    <a href="{{ route('district.create') }}">Add a District</a>
    <p><a href="http://127.0.0.1:8000/">Back</a></p>
</body>
</html>