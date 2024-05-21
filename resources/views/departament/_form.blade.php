<form method="post" action="{{ $departament ? route('departament.update', $departament) : route('departament.store') }}" enctype="multipart/form-data">
    @csrf
    @if ($departament)
        @method('PUT')
        <input type="hidden" name="id" value="{{ $departament->id }}">
    @endif
    <div class="row d-grid">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ $departament ? $departament->name : old('name', $departament->name ?? '') }}">
        </div>
        
        <div class="form-actions text-right">
            <button type="submit" class="btn btn-success button-save-form ladda-button" data-style="zoom-out">
                <i class="la la-check-square-o"></i> Salvar
            </button>
        </div>
    </div>
</form>