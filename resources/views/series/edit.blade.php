<x-layout title="Editar Série">
{{--    <x-series.form :action="route('series.update', $series->id)" :nome="$series->nome" :update="true" />--}}
    <form action="{{ route('series.update', $series->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3 d-flex gap-3">
            <div class="d-flex flex-column flex-grow-1">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
{{--                       value="{{ old('nome') ?? $series->nome ?? ''  }}"--}}
                       @isset($series->nome)value="{{ $series->nome }}" @endisset
                       id="nome"
                       name="nome"
                       class="form-control">
            </div>
            <div class="d-flex flex-column">
                <label for="numero_temporadas" class="form-label">N° Temporadas:</label>
                <input type="number"
                       @isset($series->numero_temporadas)value="{{ $series->numero_temporadas }}" @endisset
                       id="numero_temporadas"
                       name="numero_temporadas"
                       class="form-control">
            </div>
            <div>
                <label for="episodios_temporada" class="form-label">Eps / Temporada:</label>
                <input type="number"
                       @isset($series->episodios_temporada)value="{{ $series->episodios_temporada }}" @endisset
                       id="episodios_temporada"
                       name="episodios_temporada"
                       class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($series) ? 'Editar' : 'Adicionar' }}</button>
    </form>

</x-layout>
