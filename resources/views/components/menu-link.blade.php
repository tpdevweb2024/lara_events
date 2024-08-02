<li>
    <a href="{{ route($route) }}" class="{{ request()->routeIs($route) ? 'active' : '' }} {{ $type }}">
        {{ $slot }}
    </a>
</li>
