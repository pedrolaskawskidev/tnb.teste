@extends('home')

@section('title', 'Departamento')

@section('departament.show')
    <div class="card">
        <div class="card-body">
            @include('departament._form', ['departament' => $departament])
        </div>
    </div>
@endsection
