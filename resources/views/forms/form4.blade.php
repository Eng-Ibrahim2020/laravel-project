<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 w-50 bg-warning p-5">
        <h1 class="text-dark">Enter Your Name & Upload CV</h1>
        <form action="{{route('form.form4')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <input class="form-control mt-3 @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Enter Your Name ..." >
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <div class="input-group my-3">
                <input type="file" class="form-control @error('uploadedFile') is-invalid @enderror" name="uploadedFile">
                @error('uploadedFile')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button class="btn btn-success px-5">Upload</button>
        </form>
    </div>
</body>
</html>
