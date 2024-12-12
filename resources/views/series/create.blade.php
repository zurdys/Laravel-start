<x-layout title="Nova Série">
    <form action="{{ isset($serie) ? route('series.update', $serie) : route('series.store') }}"
          method="post">
        @csrf
        <div class="mb-3 d-flex gap-3" >
            <div class="d-flex flex-column flex-grow-1">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       value="{{ $serie->nome ?? '' }}"
                    id="nome"
                    name="nome"
                    class="form-control">
            </div>
            <div class="d-flex flex-column">
                <label for="numero-temporadas" class="form-label">N° Temporadas:</label>
                <input type="number"
                       id="numero-temporadas"
                       name="numero-temporadas"
                       class="form-control">
            </div>
            <div>
                <label for="episodios-temporada" class="form-label">Eps / Temporada:</label>
                <input type="number"
                       id="episodios-temporada"
                       name="episodios-temporada"
                       class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($serie) ? 'Editar' : 'Adicionar' }}</button>
    </form>
</x-layout>
