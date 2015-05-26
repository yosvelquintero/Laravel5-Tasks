@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Task List</h1>
            <p class="lead">Here's a list of all your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a></p>
            <hr>

            @include('flash')
        </div>
    </div>

    @foreach($tasks as $task)
        <div class="row">
            <div class="col-sm-12">
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description}}</p>
                <p>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                </p>
                <hr>
            </div>
        </div>
    @endforeach
@stop
