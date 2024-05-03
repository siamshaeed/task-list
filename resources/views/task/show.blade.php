<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                  <h2>Task Details</h2>
                </div>
                <div class="card-body">
                    <h5>Description :</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam error, eveniet optio adipisci ducimus itaque at nam nisi sapiente praesentium nemo, quia incidunt totam excepturi provident animi corporis, tenetur reprehenderit?</p>
                    <h5>Long Description :</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam error, eveniet optio adipisci ducimus itaque at nam nisi sapiente praesentium nemo, quia incidunt totam excepturi provident animi corporis, tenetur reprehenderit?</p>
                    <div class="">
                        <a href="{{route('editTask')}}" type="button" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" type="button" class="btn btn-sm btn-danger">Delete</a>
                        <a href="#" type="button" class="btn btn-sm btn-success">Complete</a>
                        <span class="text-green">Uncomplete Task</span>
                    </div>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
