@extends('layouts.app')

@section('content')
    <main>
        <div class="show">
            <div class="container">
                <div class="img-thumbnails">
                    <span class="category">{{ ucwords($event->category->name) }}</span>
                    <img src="https://picsum.photos/id/12/1200/400" alt="Card image">
                </div>
                <div class="content">
                    <h1>{{ $event->title }}</h1>
                    <p>{{ $event->date }}</p>
                    <div class="tags">
                        @foreach ($event->tags as $tag)
                            <span>{{ $tag->name }}</span>
                        @endforeach
                    </div>
                    <p class="article">{{ $event->description }}</p>
                </div>
            </div>

            <div class="container">
                <div class="cta">
                    <a href="{{ route('events.edit', $event) }}" class="button">Modifier</a>
                </div>
            </div>
        </div>
    </main>
@endsection
