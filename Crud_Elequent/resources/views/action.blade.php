<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Operation - Bootstrap</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        
        <!-- Title -->
        <h2 class="text-center mb-4">CRUD Using Eloquent ORM</h2>

        <!-- Form Section -->
        <div class="card mb-4 shadow-sm">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0 text-center">Edit Student</h5>
          </div>
          <div class="card-body">
            <form id="userForm" method="POST">
                @csrf
                @method('PUT')
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" name='name' value="{{$student->name}}" placeholder="Enter name">
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name='email' value="{{$student->email}}" placeholder="Enter email">
                </div>
                <div class="col-md-6">
                  <label for="city" class="form-label">City</label>
                  <input type="text" class="form-control" id="city" name='city' value="{{$student->city}}" placeholder="Enter city">
                </div>
                <div class="col-md-6">
                  <label for="age" class="form-label">Age</label>
                  <input type="number" class="form-control" id="age" name='age' value="{{$student->age}}" placeholder="Enter age">
                </div>
              </div>

              <div class="mt-4 text-end">
                <button type="submit" class="btn btn-success px-4">Update</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>