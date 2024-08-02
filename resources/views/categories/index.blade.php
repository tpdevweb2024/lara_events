@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1>Toutes les catégories</h1>

                <div class="cards">
                    @foreach ($categories as $category)
                        <div class="card">
                            <div class="card-content">
                                <h2>{{ ucwords($category->name) }}</h2>
                                <div class="card-cta">
                                    <a href="{{ route('categories.show', $category) }}" class="card-button">Voir les
                                        {{ $category->events->count() }}
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
