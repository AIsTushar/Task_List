@extends('layouts.app')

@section('title', 'List Of Taskes')


@section('content')

<div class="mb-4">
    <a href="{{route('tasks.create')}} " class="link">Add Task!!</a>
</div>

@forelse ($tasks as $task)
<div>
    <a href="{{route('tasks.show', ['task'=> $task->id])}}" @class(['line-through' => $task->completed])>{{$task-> title}}</a>
</div>
@empty
<div>There are no task!</div>

@endforelse

@if ($tasks->count())
    <nav class="mt-4 bg-white">
        {{ $tasks->links() }}
    </nav>
@endif

@endsection
