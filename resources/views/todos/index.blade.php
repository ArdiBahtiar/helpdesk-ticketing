@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->

                    @can('isAdmin')
                        <div class="btn btn-success btn-lg">
                            <a href="{{ url('todos/indexAdmin') }}" class="btn btn-primary">Admin's Work Order</a>
                            <a href="{{ url('todos/requested') }}" class="btn btn-primary">Admin's Request</a>
                        </div>
                    @elsecan('isManager')
                        <div class="btn btn-primary btn-lg">
                            <a href="{{ url('todos/indexManager') }}" class="btn btn-primary">Manager</a>
                            {{-- <a href="{{ url('todos/indexManager') }}" class="btn btn-primary">Manager</a> --}}
                        </div>
                    @else
                        <div class="btn btn-info btn-lg">
                            <a href="{{ url('todos/indexUser') }}" class="btn btn-primary">User</a>
                            {{-- <a href="{{ url('todos/indexUser') }}" class="btn btn-primary">User</a> --}}
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
