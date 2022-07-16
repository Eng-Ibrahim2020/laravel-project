<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-5">
    <form action="{{route('form.form2_data')}}" method="POST">
    @csrf
        <h1 class="text-center text-primary">Register new account</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group my-3">
            <label class="form-label mb-1" for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group my-3">
            <label class="form-label mb-1" for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group my-3">
            <label class="form-label mb-1" for="gender">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                <label class="form-check-label" for="male">
                  Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="female">
                  Female
                </label>
              </div>
        </div>
        <div class="form-group my-3">
            <label class="form-label mb-1" for="age">Age</label>
            <input class="form-control" type="text" id="age" name="age" placeholder="Age">
        </div>
        <button class="btn btn-primary w-25">Add</button>
    </form>
   </div>
</body>
</html>
