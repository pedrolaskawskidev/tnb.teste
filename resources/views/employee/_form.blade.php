<form method="post" action="{{ $employee ? route('employee.update', $employee) : route('employee.store') }}" enctype="multipart/form-data">
    @csrf
    @if ($employee)
        @method('PUT')
        <input type="hidden" name="id" value="{{ $employee->id }}">
    @endif
    <div class="row d-grid">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ $employee ? $employee->name : old('name', $employee->name ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control"
                value="{{ $employee ? $employee->email : old('name', $employee->email ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" name="cpf" id="cpf" class="form-control"
                value="{{ $employee ? $employee->cpf : old('name', $employee->cpf ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="departament" class="form-label">Departamento</label>
            <input type="text" name="departament" id="departament" class="form-control"
                value="{{ $employee ? $employee->departament : old('name', $employee->departament ?? '') }}">
        </div>

        <div class="form-actions text-right">
            <button type="submit" class="btn btn-success button-save-form ladda-button" data-style="zoom-out">
                <i class="la la-check-square-o"></i> Salvar
            </button>
        </div>
    </div>
</form>