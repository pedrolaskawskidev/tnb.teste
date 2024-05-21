@extends('home')

@section('title', 'Tarefas')

@section('task.index')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Funcionário</th>
            <th scope="col">Tarefa</th>
            <th scope="col">Data</th>
            <th scope="col">Início</th>
            <th scope="col">Fim</th>
            <th scope="col">Ações</th>
            <th><a class="btn btn-success" title="Novo" href="{{ route('task.create') }}"><i class="bi bi-list-check"></i></a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td class="align-middle">{{$task ->employee}}</td>
                <td class="align-middle">{{$task->description}}</td>
                <td class="align-middle">{{date('d/m/Y', strtotime($task->date))}}</td>
                <td class="align-middle">{{$task->start}}</td>
                <td class="align-middle">{{$task->end}}</td>
                <td class="align-middle"> 
                    <a class="btn btn-primary" title="Editar" href="{{ route('task.edit', ['id' => $task->id]) }}"><i class="bi bi-list-ul"></i></a>
                    <a class="btn btn-danger" title="Excluir" href="{{ route('task.destroy', ['id' => $task->id]) }}"><i class="bi bi-trash-fill"></i></a> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection