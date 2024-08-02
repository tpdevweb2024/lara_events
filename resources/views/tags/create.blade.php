@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1>Create new tag</h1>
                <div class="form">
                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf

                        <div>
                            <label for="name">Name</label>
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
