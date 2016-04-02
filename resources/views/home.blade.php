@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Hello, {!! $user !!}!</h3>
                </div>

                <div class="panel-body">
                    <p class="lead">Project-App Dashboard</p>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
