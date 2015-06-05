@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Edit Task - {{ $task->title }} </h1>
            <p class="lead">Edit this task below. <a href="{{ route('tasks.index') }}">Go back to all tasks.</a></p>
            <hr>

            @include('errors.error')
            @include('flash')

            {!! Form::model($task, [
                'method' => 'PATCH',
                'route' => ['tasks.update', $task->id],
                'id' => 'editForm'
            ]) !!}



            <div class="form-group">
                {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
            </div>

            {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
        {{--  @include('vendor.lrgt.ajax_script', ['form' => '#editForm', 'request'=>'App/Http/Requests/TaskRequest','on_start'=>false]) --}}
    </div>
@stop
