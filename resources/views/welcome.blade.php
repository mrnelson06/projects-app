@extends('layouts.app')

@section('styles')
<link href="css/cover.css" rel="stylesheet">
@endsection

@section('content')

<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover text-center">
                <h1 class="cover-heading text-uppercase">Project Portal</h1>
                <p class="lead">A comprehensive directory of what I'm doing.</p>
                <a href="/login" class="btn btn-lg btn-default">Log In</a><br>
            </div>
        </div>
    </div>
</div>
<div id="skyline"></div>

@endsection
