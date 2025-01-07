@extends('layouts.app')




@section('content')

@includeIf('form', ['task'=> $task])

@endsection
