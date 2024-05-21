<form id= 'formTask' method="post" action="{{ $tasks ? route('task.update', $tasks) : route('task.store') }}"
    enctype="multipart/form-data">
    @csrf
    @if ($tasks)
        @method('PUT')
        <input type="hidden" name="id" value="{{ $tasks->id }}">
    @endif
    <div class="row d-grid">
        <div class="mb-3">
            <label for="employee" class="form-label">Funcionário</label>
            <select class="form-select" name="employee" aria-label="Selecione">
                <option selected>Selecione</option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->name }}" @selected(old('employee', $tasks->employee ?? '') == $employee->name)>{{ $employee->name }} -
                        {{ $employee->departament }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Dia</label>
            <select class="form-select" name="date" aria-label="Selecione">
                <option selected>Selecione</option>
                @foreach ($days as $day)
                    <option value="{{ $day }}" @selected(old('date', date_format(date_create_from_format('Y-m-d', $tasks->date), 'd/m/Y') ?? '') == $day)>
                        {{ $day }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="start" class="form-label">Hora Início</label>
            <select class="form-select" name="start" id='start' aria-label="Selecione">
                <option selected>Selecione</option>
                @foreach ($hours as $hour)
                    <option value="{{ $hour }}" @selected(old('start', $tasks->start ?? '') == $hour)>
                        {{ $hour }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="end" class="form-label">Hora Fim</label>
            <select class="form-select" name="end" id='end' aria-label="Selecione">
                <option selected>Selecione</option>
                @foreach ($hours as $hour)
                    <option value="{{ $hour }}" @selected(old('end', $tasks->end ?? '') == $hour)>
                        {{ $hour }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <input type="text" name="description" id="description" class="form-control"
                value="{{ $tasks ? $tasks->description : old('description', $tasks->description ?? '') }}">
        </div>
        <div class="form-actions text-right">
            <button type="submit" class="btn btn-success button-save-form ladda-button" data-style="zoom-out">
                <i class="la la-check-square-o"></i> Salvar
            </button>
        </div>
    </div>
</form>