<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
        table {
            width: 60%;
            border-collapse: collapse; /* double border এড়ানোর জন্য */
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #490b0b; /* Header color */
            color: white;
        }

        .pagination {
            text-align: center;
            margin: 20px;
        }
        
    </style>
</head>
<body>
    <h2 style="text-align:center;">Student Information</h2>
    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->city}}</td>
            </tr>
        @endforeach
    </table>
    <div class="pagination">
        {{ $students->links() }}
    </div>
</body>
</html>