@extends('home')

@section('title', 'Funcionários')

@section('employee.index')

    <table class="table">
       
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Departamento</th>
                <th scope="col">Ações</th>
                <th><a class="btn btn-success" title="Novo" href="{{ route('employee.create') }}"><i class="bi bi-person-add"></i></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th class="align-middle" scope="row">{{$employee->id}}</th>
                    <td class="align-middle">{{$employee->name}}</td>
                    <td class="align-middle">{{$employee->email}}</td>
                    <td class="align-middle">{{$employee->cpf}}</td>
                    <td class="align-middle">{{$employee->departament ?: 'Vazio'}}</td>
                    <td class="align-middle"> 
                        <a class="btn btn-primary" title="Editar" href="{{ route('employee.edit', ['id' => $employee->id]) }}"><i class="bi bi-person-fill-gear"></i></a>
                        <a class="btn btn-danger" title="Excluir" href="{{ route('employee.destroy', ['id' => $employee->id]) }}"><i class="bi bi-trash-fill"></i></a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
