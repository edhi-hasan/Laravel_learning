<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Student List</h2>
    <hr>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id}}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->city}}</td>
            </tr>
        @endforeach
        
    </table><br>
    {{$singlestu->id}}
    {{$singlestu->name}}
    {{$singlestu->email}}
    {{$singlestu->city}}
</body>
</html>