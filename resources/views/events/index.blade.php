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

            <div class="pagination">
                <ul class="pagination-list">
                    @foreach ($events->getUrlRange(1, $events->lastPage()) as $page => $url)
                        @if ($page == $events->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
