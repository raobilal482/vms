<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
