<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (auth()->user()->role === 'student')
                        <h3 class="text-2xl font-semibold">
                            Welcome, Student
                        </h3>

                        <p class="mt-2 text-gray-600">
                            You are logged in as a student.
                        </p>
                    @elseif (auth()->user()->role === 'teacher')
                        <h3 class="text-2xl font-semibold">
                            Welcome, Teacher
                        </h3>

                        <p class="mt-2 text-gray-600">
                            You are logged in as a Teacher
                        </p>
                    @elseif (auth()->user()->role === 'parent')
                        <h3 class="text-2xl font-semibold">
                            Welcome, Parent
                        </h3>

                        <p class="mt-2 text-gray-600">
                            You are logged in as a Parent.
                        </p>
                    @elseif (auth()->user()->role === 'admin')
                        <h3 class="text-2xl font-semibold">
                            You are the Admin
                        </h3>
                        <p class="mt-2 text-gray-600">
                            You are here as the admin.
                        </p>
                    @endif

                    <a href="{{ route('home') }}" class="inline-block mt-4 text-blue-600 hover:text-blue-800 underline">
                        Go to Home.
                    </a>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
