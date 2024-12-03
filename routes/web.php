<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = Task::latest()->where('completed', true)->get();
    return view('index', ['tasks' => $tasks]);
})->name('tasks.index');


Route::get('/tasks/{id}', function ($id) {

    return view('show', ['task' => Task::findOrFail($id)]);
})->name('tasks.show');


Route::fallback(function () {
    return 'Fall back Route';
});
