@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Todo List</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/todos') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">For which Dept?</label>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="admin" name="dept">Admin
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" value="manager" name="dept">Manager
                                    </label>
                                </div>
                            </div>

                            <input type="hidden" value="{{ $userNameData }}" name="requestor">
                            <input type="hidden" value="{{ $userDeptData }}" name="requestor_dept">
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Todo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection