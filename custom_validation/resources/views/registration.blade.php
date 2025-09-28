<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
</head>
<body>
    <h1>Student Registration Form</h1>
    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>    
            @endforeach
        </ul>
    @endif
    <form action="#" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" ><br><br>

        <label>Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" ><br><br>
        <label>Roll:</label>
        <input type="text" name="roll" id="roll" value="{{ old('roll') }}" ><br><br>
        <label>Phone:</label>
        <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"><br><br>

        <button type="submit">Submit</button>
    </form><br>

    @if (isset($data))
        @foreach ($data as $item)
            {{$item}}
        @endforeach    
    @endif

</body>
</html>
