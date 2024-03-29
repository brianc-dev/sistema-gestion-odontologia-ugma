<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-end z-10">
    {{--  Navbar for Home page in /  --}}
    @auth
        @php
            switch (Auth::user()->role_id) {
                case 0:
                    $home = route('admin.home');
                    break;
                case 1:
                    break;
                case 2:
                    $home = route('');
                    break;
                case 3:
                    $home = route('home');
                    break;

            }
        @endphp
        <a href="{{ $home }}"
           class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
           wire:navigate>{{ Auth::user()->name }}</a>
{{--    @else--}}
{{--        <a href="{{ route('login') }}"--}}
{{--           class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"--}}
{{--           wire:navigate>Iniciar Sesión</a>--}}

{{--        @if (Route::has('register'))--}}
{{--            <a href="{{ route('register') }}"--}}
{{--               class="ms-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"--}}
{{--               wire:navigate>Registrarse</a>--}}
{{--        @endif--}}
    @endauth
</div>
