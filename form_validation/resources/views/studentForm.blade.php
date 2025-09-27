<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Form</title>
</head>
<body>
    <h1>Student Registration Form</h1>

        {{-- @if ($errors->any())
            @foreach ($errors->all() as $message)
                <span style="color:red;">{{ $message }}</span> (error message dekhanor jnno )
            @endforeach
        @endif --}}

        @if ($errors->any())
            @if ($errors->has('name'))
                <span style="color:red;">Name wrong.</span> {{--(custom error message dekhanor jnno )--}}
            @endif
        @endif
    

    <form action="#" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" ><br><br>
        {{-- @if ($errors->any())
            @foreach ($errors->get('name') as $message)
                <span style="color:red;">{{ $message }}</span> 
            @endforeach
        @endif  --}}

        @error('name')

            {{$message}} <br>
            
        @enderror

        <label>Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" ><br><br>
        {{-- @if ($errors->any())
            @foreach ($errors->get('email') as $message)
                <span style="color:red;">{{ $message }}</span>
            @endforeach
        @endif --}}

    
        <label>Roll:</label>
        <input type="text" name="roll" id="roll" value="{{ old('roll') }}" ><br><br>

        <button type="submit">Submit</button>
    </form><br>

    @if (isset($data))
        @foreach ($data as $item)
            {{$item}} <br> 
        @endforeach
    @endif

</body>
</html>
