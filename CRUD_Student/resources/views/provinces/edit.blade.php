<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('provinces.update',$province->id) }}" method="post">
        @csrf
        @method('PUT')
        <h2>Edit Provinces</h2>
        <label for="name">Edit Province:</label>
        <input type="text" name="name" id="name" value="{{ $province->name }}" required>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ provinces.index }}">Back</a>
</body>
</html>