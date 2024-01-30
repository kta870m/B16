<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('provinces.store') }}" method="POST">
        @csrf
        <h2>Add Provinces</h2>
        <label for="name">Enter Province:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>
    <a href="http://127.0.0.1:8000/provinces">Back</a>
    
</body>
</html>