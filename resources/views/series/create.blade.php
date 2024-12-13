<x-layout title="Nova Série">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false" />
{{--    <form action="{{ isset($series) ? route('series.update', $series) : route('series.store') }}"--}}
{{--          method="post">--}}
{{--        @csrf--}}
{{--        <div class="mb-3 d-flex gap-3" >--}}
{{--            <div class="d-flex flex-column flex-grow-1">--}}
{{--                <label for="nome" class="form-label">Nome:</label>--}}
{{--                <input type="text"--}}
{{--                       value="{{ $series->nome ?? '' }}"--}}
{{--                       id="nome"--}}
{{--                       name="nome"--}}
{{--                       class="form-control">--}}
{{--            </div>--}}
{{--            <div class="d-flex flex-column">--}}
{{--                <label for="numero_temporadas" class="form-label">N° Temporadas:</label>--}}
{{--                <input type="number"--}}
{{--                       value="{{ $series->numero_temporadas ?? '' }}"--}}
{{--                       id="numero_temporadas"--}}
{{--                       name="numero_temporadas"--}}
{{--                       class="form-control">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="episodios_temporada" class="form-label">Eps / Temporada:</label>--}}
{{--                <input type="number"--}}
{{--                       value="{{ $series->episodios_temporada ?? '' }}"--}}
{{--                       id="episodios_temporada"--}}
{{--                       name="episodios_temporada"--}}
{{--                       class="form-control">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <button type="submit" class="btn btn-primary">{{ isset($series) ? 'Editar' : 'Adicionar' }}</button>--}}
{{--    </form>--}}
</x-layout>
