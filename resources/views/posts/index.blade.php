<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
       <div class="d-flex justify-content-between align-items-center">
         <h1>All Posts</h1>
        <a href="#" class="btn btn-dark px-5">Add New Post</a>
       </div>
        <table class="table table-bordered table-striped table-hover mt-3 table-responsive  text-center">
            <thead>
                <tr class="table-dark">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td><span class="d-inline-block text-truncate" style="max-width: 300px;">{{$post->desc}}</span></td>
                        <td>{{$post->created_at->format('d F, Y | H:s:i a')}}</td>
                        <td>{{$post->updated_at->diffForHumans()}}</td>
                        <td class="d-flex justify-content-around">
                            <i class="bi bi-pencil-square text-light bg-primary py-1 px-2 rounded-3 pe-auto"></i>
                            <i class="bi bi-trash3-fill text-light bg-danger py-1 px-2 rounded-3 pe-auto"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</body>
</html>
