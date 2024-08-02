@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h1>Créer un évènement</h1>
                </div>
                <div class="form">
                    <form action="{{ route('events.store') }}" method="POST">
                        @csrf
                        <div>
                            <label for="title">Titre</label>
                            <input type="text" name="title" id="title">
                        </div>

                        <div>
                            <label for="date">Date</label>
                            <input type="datetime-local" name="date" id="date">
                        </div>

                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" id="description"></textarea>
                        </div>

                        <div>
                            <label for="category_id">Catégorie</label>
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="tags">Tags</label>
                            <div class="tags">
                                @foreach ($tags as $tag)
                                    <div>
                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                                        {{ ucwords($tag->name) }}
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="submit">
                            <div>
                                <button type="submit" class="">Créer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
