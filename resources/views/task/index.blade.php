@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10"><h2>Task List</h2></div>
                        <div class="col-md-2"><a href="{{ route('addTask')}}" type="button" class="btn btn-sm btn-secondary">Add Task</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                      @foreach ($taskLists as $taskList)
                        @if ($taskList)
                          <a href="{{route('showTask')}}" class="text-decoration-none text-dark"><li>{{$taskList->title}}</li></a>
                        @endif
                      @endforeach
                    </ul>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
