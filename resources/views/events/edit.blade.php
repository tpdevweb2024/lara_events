@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h1>Créer un évènement</h1>
                </div>
                <div class="form">
                    <form action="{{ route('events.update', $event) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div>
                            <label for="title">Titre</label>
                            <input type="text" name="title" id="title" value="{{ $event->title }}">
                        </div>

                        <div>
                            <label for="date">Date</label>
                            <input type="datetime-local" name="date" id="date" value="{{ $event->date }}">
                        </div>

                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" id="description"> {{ $event->description }}</textarea>
                        </div>

                        <div>
                            <label for="category_id">Catégorie</label>
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option {{ $category->id == $event->category_id ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="tags">Tags</label>
                            <div class="tags">
                                @foreach ($tags as $tag)
                                    <div>
                                        <input {{ $event->tags->contains($tag) ? 'checked' : '' }} type="checkbox"
                                            name="tags[]" value="{{ $tag->id }}">
                                        {{ ucwords($tag->name) }}
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="submit">
                            <div>
                                <button type="submit" class="">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
