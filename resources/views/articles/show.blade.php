@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="page-header">
                <h1>{{ $article->title }}</h1>
            </div>
            <p>{{ $article->body }}</p>
        </div>
    </div>



@stop