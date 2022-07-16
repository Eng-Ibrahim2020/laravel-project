<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-5 w-50">
        <form action="{{route('form.form3')}}" method="POST">
            @csrf
            <h1 class="text-primary">Login to your account</h1>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input class="form-control mt-1 @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Your email ...">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group my-3">
                <label for="password">Password</label>
                <input class="form-control mt-1 @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Your Password ..." autocomplete="new-password" >
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary text-light w-25">Login</button>
        </form>
   </div>
</body>
</html>
