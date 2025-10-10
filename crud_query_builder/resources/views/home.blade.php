<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Example</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h2 class="bg-dark text-light text-center mb-4 py-2">Student Information</h2>

    <!-- Form Section -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <form method="POST" action="">
        @csrf
          <div class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            </div>
            <div class="col-md-2">
              <label class="form-label">Roll</label>
              <input type="text" name="roll" class="form-control" placeholder="Enter Roll" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>
            <div class="col-md-2">
              <label class="form-label">City</label>
              <input type="text" name="city" class="form-control" placeholder="Enter City" required>
            </div>
            <div class="col-md-2 d-flex align-items-end">
              <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    @if (session()->has('status'))
        <div class="alert alert-success mt-1">
            {{ session('status') }}
        </div>
    @endif


    <!-- Table Section -->
    <div class="card shadow-sm">
      <div class="card-body">
        <h5 class="card-title mb-3">All Students</h5>
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Roll</th>
              <th>Email</th>
              <th>City</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $key => $stu)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{$stu->name}}</td>
              <td>{{$stu->roll}}</td>
              <td>{{$stu->email}}</td>
              <td>{{$stu->city}}</td>
              <td>
                <a href="{{url('/edit',$stu->id)}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{url('/delete',$stu->id)}}" class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>                
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS Bundle (Optional for dropdowns, not required for form/table) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
