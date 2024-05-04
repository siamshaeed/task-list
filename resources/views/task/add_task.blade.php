@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h4>Add Task</h4></div>
                        <div class="col-md-2"><a href="{{ route('taskList')}}" type="button" class="btn btn-sm btn-secondary">Task List</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('taskStore')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" name="title" placeholder="Enter Task Title" >
                          @error('title')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter Task Description" >
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="long_description">Long Description</label>
                          <textarea name="long_description" class="form-control" cols="30" rows="2" placeholder="Enter Task Long Description"></textarea>
                          @error('long_description')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-secondary mt-3">Save</button>
                      </form>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
