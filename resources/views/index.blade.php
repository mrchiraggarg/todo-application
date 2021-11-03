<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Todo App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Source Code Pro', monospace;
        }
    </style>
</head>

<body class="bg-dark">
    <section class="container-fluid bg-info text-dark py-3 text-center">
        <h1>TODO APP</h1>
    </section>
    <section class="container">
        <form action="{{url('/add')}}" method="post" class="form-group">
            @csrf
            <div class="row py-5">
                <div class="col-md-4">
                    <input type="text" name="task" class="form-control" placeholder="Enter Your Task...">
                </div>
                <div class="col-md-4">
                    <input type="datetime-local" name="time" class="form-control">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-info w-100">Add New Task</button>
                </div>
            </div>
        </form>
    </section>
    <section class="container">
        <table class="table table-success table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">Task No.</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Task Time</th>
                    <th scope="col">Task Delete</th>
                </tr>
            </thead>
            <tbody>
                {{$count = 1;}}
                @foreach($task as $item)
                <tr>
                    <th scope="row">{{$count++;}}</th>
                    <td>{{$item->task}}</td>
                    <td>{{$item->time}}</td>
                    <td>
                        <a href="{{url('/delete/'.$item->id)}}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
