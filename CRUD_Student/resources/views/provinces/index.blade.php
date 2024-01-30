<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Provinces List</title>
</head>
<table>
    <style>
        table,tr,th,td{border: 1px solid black}
        button>a{text-decoration: none;color: black}
    </style>

</table>
<body>
    <h1>Provinces List</h1>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>actions</th>
            </tr>
        @foreach ($provinces as $province)
        <form action="{{ route('provinces.destroy',$province->id)}}" method="post">
        @csrf
        @method('DELETE')
        <tr>
            <td>{{ $province->id }}</td>
            <td>{{ $province->name }} </td>
            <td><button type="submit" onclick="return confirm('Are you sure want to delete')">delete</button></td>
            <td><button><a href="{{ route('provinces.edit',$province->id)}}">Edit</a></button></td>
            <td><button><a href="{{ route('provinces.show', $province->id) }}">Show List</a></button></td>
        </tr>
        </form>
        @endforeach
    </table>
    <a href="{{ route('provinces.create') }}">Add Provinces</a>
    <p><a href="http://127.0.0.1:8000/">Back</a></p>
</body>
</html>
