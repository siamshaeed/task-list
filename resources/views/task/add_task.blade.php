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
                    <div class="row">
                        <div class="col-md-10"><h2>Add Task</h2></div>
                        <div class="col-md-2"><a href="{{ route('taskList')}}" type="button" class="btn btn-sm btn-secondary">Task List</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('taskStore')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" placeholder="Enter Task Title">
                        </div>

                        <div class="form-group">
                            <label for="title">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter Task Description">
                        </div>

                        <div class="form-group">
                          <label for="title">Long Description</label>
                          <textarea name="long_description" class="form-control" cols="30" rows="4" placeholder="Enter Task Long Description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-sm btn-secondary mt-3">Save</button>
                      </form>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
