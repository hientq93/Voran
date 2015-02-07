@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Question
                </div>
                <div class="panel-body">

                    @include('errors.uierrors')

                    {!! Form::open(['action' => 'QuestionsController@store']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('question', 'Question:') !!}
                        {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Add Question', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
