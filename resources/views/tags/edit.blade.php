@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1>Modifier un tag</h1>
                <form action="{{ route('tags.update', $tag) }}" method="POST">
                    @csrf

                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $tag->name }}">
                    </div>

                    <div class="submit">
                        <div>
                            <button type="submit" class="">Modifier</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>
@endsection
