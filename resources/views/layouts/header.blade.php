<header>
    <div class="wrapper">
        <div class="logo">
            <a href="{{ route('home') }}">Lara-events</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <x-menu-link route="home" type="success">Accueil</x-menu-link>
                    <x-menu-link route="events.index" type="">Evenements</x-menu-link>
                    <x-menu-link route="events.create" type="">Créer un évènement</x-menu-link>
                    <x-menu-link route="tags.index" type="">Tags</x-menu-link>
                    <x-menu-link route="categories.index" type="">Catégories</x-menu-link>
                </ul>
            </nav>
        </div>
    </div>
</header>
