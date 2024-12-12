<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    <a href="/series/favoritos" class="btn btn-dark mb-2">Favoritos</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between"><a href="#">{{ $serie->nome }}</a>
            <div class="d-flex gap-2">
                <a href="{{ route('series.favoritar', $serie) }}"><i class="{{$serie->favorito ? 'bi bi-star-fill' : 'bi bi-star'}}" title="Favoritos"></i></a>
                <a href="{{ route('series.edit', $serie) }}"><i class="bi bi-pencil-square text-primary" title="Editar"></i></a>
                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        <i class="bi bi-trash-fill" title="Remover"></i>
                    </button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>
