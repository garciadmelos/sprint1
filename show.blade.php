@extends('layouts.app')

@section('content')

<div class="container">

    <h1>{{ $evento->nome }}</h1>

    <div class="mt-4">

        @forelse ($perguntas as $pergunta)

            <div class="card mb-3">
                <div class="card-body">
                    <p class="mb-0">
                        {{ $pergunta->texto }}
                    </p>
                </div>
            </div>

        @empty

            <p>Nenhuma pergunta encontrada para este evento.</p>

        @endforelse

    </div>

    <div class="mt-4">
        {{ $perguntas->links() }}
    </div>

</div>

@endsection
