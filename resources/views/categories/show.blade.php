@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1>{{ ucwords($category->name) }}</h1>

                <div class="cards">
                    @foreach ($category->events as $event)
                        <div class="card">
                            <div class="card-img">
                                <span class="category">{{ ucwords($event->category->name) }}</span>
                                <img src="https://picsum.photos/id/{{ rand(1, 100) }}/300/200" alt="Card image">
                            </div>
                            <div class="card-content">
                                <h2>{{ $event->title }}</h2>
                                <h3>{{ $event->date }}</h3>
                                <div class="tags">
                                    @foreach ($event->tags as $tag)
                                        <span>{{ $tag->name }}</span>
                                    @endforeach
                                </div>
                                <p>{{ $event->description }}</p>
                                <div class="card-cta">
                                    <a href="{{ route('events.show', $event) }}" class="card-button">Voir l'évènement</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </main>
@endsection
