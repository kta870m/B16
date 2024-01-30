<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="{{ route('student.update', $student->id) }}" method="post">
        <div>
            <div>Name:</div>
            <div><input type="text" name="name" id="name"></div>
        </div>
        <div>
            <div>Photo:</div>
            <div><input type="file" name="photo" id="photo"></div>
        </div>
        <div>
            <div>Birthyear:</div>
            <div><input type="number" name="birthyear" id="birthyear"></div>
        </div>
        <div>
            <div>Address:</div>
            <div><input type="text" name="address" id="address"></div>
        </div>
        <div>
            <div>Provinces_id</div>
            <div>
                <select name="district_id" id="district_id">
                    <option value="1">Ha Noi</option>
                    <option value="2">Sai Gon</option>
                </select>
            </div>
        </div>
        <button type="submit">Add</button>
    </form>
</body>
</html>