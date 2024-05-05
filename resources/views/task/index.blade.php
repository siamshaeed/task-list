@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h4>Task List</h4></div>
                        <div class="col-md-2"><a href="{{ route('addTask')}}" type="button" class="btn btn-sm btn-secondary">Add Task</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($taskLists as $taskList)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><a href="{{ route('showTask', ['id' => $taskList->id]) }}" class="text-decoration-none text-dark">{{$taskList->title}}</a></td>
                            <td>{{$taskList->completed ? 'Complete' : 'Incomplete'}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{$taskLists->links('pagination::bootstrap-5')}}

                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
