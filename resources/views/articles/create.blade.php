@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Write a New Article</h1>
        </div>

        {!! Form::open(['url' => 'articles']) !!}
        @include('articles._form', ['submitButtonText' => 'Add Article'])
        {!! Form::close() !!}

        @include('errors._formerrors')


    </div>


@endsection
