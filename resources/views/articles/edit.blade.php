@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Edit: <i>{!! $article->title !!}</i></h1>
        </div>


        {{--{!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/' . $article->id]) !!}--}}
        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles._form', ['submitButtonText' => 'Update Article'])
        {!! Form::close() !!}

        @include('errors._formerrors')

    </div>

@endsection