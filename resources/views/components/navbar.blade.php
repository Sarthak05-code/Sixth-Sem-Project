<nav class="border-b border-gray-200">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

        <a href="/" class="text-xl font-bold">
            SubShare
        </a>

        <div class="flex items-center gap-6">

            @auth

                <a
                    href="{{ route('notes') }}"
                    class="text-sm text-gray-600 hover:text-gray-900"
                >
                    Notes
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="text-sm text-gray-600 hover:text-gray-900"
                    >
                        Logout
                    </button>
                </form>

            @else

                <a
                    href="{{ route('login') }}"
                    class="text-sm text-gray-600 hover:text-gray-900"
                >
                    Login
                </a>

                <a
                    href="{{ route('register') }}"
                    class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-700"
                >
                    Get Started
                </a>

            @endauth

        </div>

    </div>
</nav>
