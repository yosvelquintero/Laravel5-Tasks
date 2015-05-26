@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Add a New Task</h1>
            <p class="lead">Add to your task list below.</p>
            <hr>

            @include('errors.error')
            @include('flash')

            {!! Form::open([
            'route' => 'tasks.store'
            ]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
