@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">

                <h1>Créer une catégorie</h1>
                <div class="form">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf

                        <div>
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="name">
                        </div>

                        <div class="submit">
                            <div>
                                <button type="submit" class="">Créer</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
