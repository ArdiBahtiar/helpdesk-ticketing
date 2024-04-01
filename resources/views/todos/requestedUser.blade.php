@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel-heading">Requested List by Admin</div>
            <br>
            <br>
            <br>
            <div class="panel-body">

                <div class="table-reponsive">
                    <table class="table">
                        <tr>
                            <th>Request</th>
                            <th>Status</th>
                            <th>To Department</th>
                            <th>Requestor</th>
                            </th>
                                
                            @if(! count($request))
                                <tr>
                                    <td colspan="3">No Request</td>
                                </tr>
                            @endif
                            @foreach($request as $todo)
                            <tr>
                                <td>{{ $todo->name }}</td>
                                <td>{{ $todo->status }}</td>
                                <td>{{ $todo->dept }}</td>
                                <td>{{ $todo->requestor }}</td>
                            </tr>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection