@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1>Tous les tags</h1>

                <div class="cards">
                    @foreach ($tags as $tag)
                        <div class="card">
                            <div class="card-content">
                                <h2>#{{ $tag->name }}</h2>
                                <div class="card-cta">
                                    <a href="{{ route('tags.show', $tag) }}" class="card-button">Voir les
                                        {{ $tag->events->count() }}
                                        évènements</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </main>
@endsection
