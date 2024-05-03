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
                  <h2>Task List</h2>
                </div>
                <div class="card-body">
                    <ul>
                        <a href="{{route('showTask')}}" class="text-decoration-none text-dark"><li>Task 1</li></a>
                        <a href="{{route('showTask')}}" class="text-decoration-none text-dark"><li>Task 2</li></a>
                        <a href="{{route('showTask')}}" class="text-decoration-none text-dark"><li>Task 3</li></a>
                        <a href="{{route('showTask')}}" class="text-decoration-none text-dark"><li>Task 4</li></a>
                    </ul>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
