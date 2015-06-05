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
                'route' => 'tasks.store',
                'id'    => 'addForm'
            ]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
            </div>

            {!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
        @include('vendor.lrgt.ajax_script', ['form' => '#addForm', 'request'=>'App/Http/Requests/TaskRequest','on_start'=>false])
    </div>
@stop
