<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add District</h2>
    <form action="{{ route('district.store') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter district name">
        <p>
            <select name="provinces_id" id="provinces_id">
                <option value="1">Ha Noi</option>
                <option value="2">Sai Gon</option>
            </select>
        </p>
        <button type="submit">Add</button>
        <p><a href="{{ route('district.index') }}">Back</a></p>
    </form>
</body>
</html>