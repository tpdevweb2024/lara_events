@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="shortcuts">
                <a class="shortcut" href="">Aujourd'hui</a>
                <a class="shortcut" href="">Demain</a>
                <a class="shortcut" href="">Cette semaine</a>
                <a class="shortcut" href="">Ce mois-ci</a>
            </div>

            <div class="cards">
                @foreach ($events as $event)
                    <div class="card">
                        <div class="card-img">
                            <span class="category">{{ ucwords($event->category->name) }}</span>
                            <img src="https://picsum.photos/id/52/300/200" alt="Card image">
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
                                <a href="" class="card-button">Voir l'évènement</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
