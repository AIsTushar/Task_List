@extends('layouts.app')

@section('title', 'List Of Taskes')


@section('content')

@forelse ($tasks as $task)
<div>
    <a href="{{route('tasks.show', ['id'=> $task->id])}}">{{$task-> title}}</a>
</div>
@empty
<div>THere are no task!</div>

@endforelse

@endsection
