@extends('layouts.app')

@section('title', 'List Of Taskes')


@section('content')

@forelse ($tasks as $task)
<div>
    <a href="{{route('tasks.show', ['task'=> $task->id])}}">{{$task-> title}}</a>
</div>
@empty
<div>There are no task!</div>

@endforelse

@endsection
