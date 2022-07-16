<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-info" role="alert">
            <h3>Hi {{$name}},</h3>
            <p class="fs-5">Your Email is: {{$email}}</p>
            <p class="fs-5">Your Gender is: {{$gender}}</p>
            <p class="fs-5">Your Age is: {{$age}}</p>
        </div>
    </div>
</body>
</html>
