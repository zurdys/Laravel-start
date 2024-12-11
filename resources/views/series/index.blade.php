<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between">{{ $serie->nome }}
            <div class="d-flex gap-2">
                <a href="{{ route('series.edit', $serie) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                <a href="{{route('series.destroy', $serie)}}"><i class="bi bi-trash-fill text-danger"></i></a>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>
