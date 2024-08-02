<header>
    <div class="wrapper">
        <div class="logo"><a href="{{ route('home') }}">Lara-events</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                    </li>
                    <li><a href="{{ route('events.index') }}"
                            class="{{ request()->routeIs('events.index') ? 'active' : '' }}">Evenements</a></li>
                    <li><a href="{{ route('events.create') }}"
                            class="{{ request()->routeIs('events.create') ? 'active' : '' }}">Créer un évènement</a>
                    </li>
                    <li><a href="{{ route('tags.index') }}">Tags</a></li>
                    <li><a href="{{ route('categories.index') }}">Catégories</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
