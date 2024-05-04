@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h2>Task Details</h2></div>
                        <div class="col-md-2"><a href="{{ route('taskList')}}" type="button" class="btn btn-sm btn-secondary">Task List</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <h5>Task Title</h5>
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
@endsection
