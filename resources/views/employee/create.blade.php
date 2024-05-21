@extends('home')

@section('title', 'Funcionários')

@section('employee.show')
<div class="card">
    <div class="card-body">
        @include('employee._form', ['employee' => null])
    </div>
</div>


@endsection