{{-- @extends('app') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todo List for Manager</div>
                <div class="panel-body">
                    <a href="{{ url('todos/createManager') }}" class="btn btn-primary">Add todo</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                {{-- <th>Is Done</th> --}}
                                <th>Department</th>
                                <th>Status</th>
                                <th>Action</th>
                            </th>

                            @if(! count($todos))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->name }}</td>
                                    {{-- <td>{{ $todo->is_done ? 'Done' : 'Not Done' }}</td> --}}
                                    <td>{{ $todo->dept}}</td>
                                    <td>{{ $todo->status}}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('todos/'.$todo->id.'/edit') }}">Edit</a>
                                        {{-- <a class="btn btn-danger" href="{{ url('todos/'.$todo->id.'/delete') }}">Delete</a> --}}
                                        <form method="POST" action="{{ url('todos/'.$todo->id.'/delete') }}">
                                            @csrf
                                            @method('delete')
                                            
                                            <button type='submit' class='border-0' data-toggle="tooltip">
                                              <a class="btn btn-danger">Delete</a>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection