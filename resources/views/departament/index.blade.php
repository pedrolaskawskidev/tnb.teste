@extends('home')

@section('title', 'Departamentos')


@section('departament.index')

<table class="table">
       
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
            <th><a class="btn btn-success" title="Novo" href="{{ route('departament.create') }}"><i class="bi bi-building-fill-add"></i></a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departaments as $departament)
            <tr>
                <th class="align-middle" scope="row">{{$departament->id}}</th>
                <td class="align-middle">{{$departament->name}}</td>
                <td class="align-middle"> 
                    <a class="btn btn-primary" title="Editar" href="{{ route('departament.edit', ['id' => $departament->id]) }}"><i class="bi bi-building-fill-gear"></i></a>
                    <a class="btn btn-danger" title="Excluir" href="{{ route('departament.destroy', ['id' => $departament->id]) }}"><i class="bi bi-trash-fill"></i></a> 
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection