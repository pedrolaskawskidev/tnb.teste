@extends('home')

@section('title', 'Tarefas')

@section('task.show')
    <div class="card">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            @include('task._form', [
                'task' => null,
                'employees' => $employees,
                'days' => $days,
                'hours' => $hours,
            ])
        </div>
    </div>


@endsection
