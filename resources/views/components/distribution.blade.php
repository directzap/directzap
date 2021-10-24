<div class="modal-body">
    <form method="POST" action="{{ route('collaborator.distribution', auth()->user()->id) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <p class="p-1">
                Olá, insira no campo abaixo o número de vezes que um colaborador será solicitado
                antes de passar a vez para outro colaborador.
            </p>

            <input type="number" value="{{ $config->distribution ?? 0 }}" class="form-control" id="distribution" name="distribution" placeholder="Ex: 1" required>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-block">
                Salvar
            </button>
        </div>
    </form>
</div>
