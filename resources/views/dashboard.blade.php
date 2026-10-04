<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    {{-- Student Dashboard --}}
                    @if (auth()->user()->role === 'student')
                        <h3 class="text-2xl font-semibold">
                            Student Dashboard
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Welcome, {{ auth()->user()->name }}.
                        </p>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Resources</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Browse educational resources.
                                </p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Discussions</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Participate in educational discussions.
                                </p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Events</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    View educational events and announcements.
                                </p>
                            </div>

                        </div>


                        {{-- Teacher Dashboard --}}
                    @elseif (auth()->user()->role === 'teacher')
                        <h3 class="text-2xl font-semibold">
                            Teacher Dashboard
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Welcome, {{ auth()->user()->name }}.
                        </p>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Resources</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Share and manage educational resources.
                                </p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Discussions</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Participate in educational discussions.
                                </p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Events</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    View and share educational events.
                                </p>
                            </div>

                        </div>


                        {{-- Parent Dashboard --}}
                    @elseif (auth()->user()->role === 'parent')
                        <h3 class="text-2xl font-semibold">
                            Parent Dashboard
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Welcome, {{ auth()->user()->name }}.
                        </p>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">My Students</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Manage your student connections.
                                </p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Events</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    View relevant educational events and announcements.
                                </p>
                            </div>

                        </div>


                        {{-- Admin Dashboard --}}
                    @elseif (auth()->user()->role === 'admin')
                        <h3 class="text-2xl font-semibold">
                            Admin Dashboard
                        </h3>

                        <p class="mt-2 text-gray-600">
                            Welcome, {{ auth()->user()->name }}.
                        </p>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">

                            <a href="{{ route('institutions.index') }}" class="border rounded-lg p-4 hover:bg-gray-50">
                                <h4 class="font-semibold">Institutions</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Manage educational institutions.
                                </p>
                            </a>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Users</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Manage platform users.
                                </p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <h4 class="font-semibold">Reports</h4>
                                <p class="mt-1 text-sm text-gray-600">
                                    Review reported content.
                                </p>
                            </div>

                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>

</x-app-layout>
