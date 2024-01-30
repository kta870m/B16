<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table,th,tr,td{border: 1px solid black}
</style>
<body>
    @extends('layouts.app')

@section('content')
    <h2>Districts List For {{ $province->name }}</h2>
    
    @foreach($province->districts as $district)
        <h3>{{ $district->name }}:</h3>
        <table>
            <thead>
                <tr>
                    <th>Student Name:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($district->students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
@endsection


</body>
</html>