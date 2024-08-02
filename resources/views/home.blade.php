@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1>Home</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore delectus laborum alias numquam maxime
                    magni accusamus nemo suscipit cum ad laboriosam ex, ipsa autem impedit eaque reprehenderit tempore ipsum
                    temporibus quisquam est, eligendi culpa voluptates libero. Qui blanditiis totam voluptas!</p>
                <x-alert type="darkgreen" radius="0px">Ici le contenu de mon composant</x-alert>
                <x-alert type="red" radius="0px">Ici le contenu de mon composant</x-alert>
                <x-alert type="blue" radius="0px">Ici le contenu de mon composant</x-alert>
                <x-alert type="pink" radius="0px">Ici le contenu de mon composant</x-alert>
            </div>
        </div>
    </main>
@endsection
