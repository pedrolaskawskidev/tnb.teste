@extends('home')

@section('title', 'Tarefas')

@section('tasks.show')
<div class="card">
    <div class="card-body">
        @include('task._form', [
            'task' => $task,
            'employees' => $employees,
            'days' => $days,
            'hours' => $hours,
        ])
</div>


@endsection