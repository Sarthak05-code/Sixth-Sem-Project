@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <section class="mx-auto max-w-md px-6 py-16">

        <div class="rounded-xl border border-gray-200 bg-white p-8">

            <h1 class="text-2xl font-bold">
                Create your account
            </h1>

            <p class="mt-2 text-sm text-gray-600">
                Create an account to start organizing your notes.
            </p>


            @if ($errors->any())
                <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4">
                    <ul class="list-disc space-y-1 pl-5 text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/register" class="mt-8 space-y-5">
                @csrf

                <div>
                    <label
                        for="name"
                        class="block text-sm font-medium text-gray-700"
                    >
                        Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none focus:border-gray-500"
                        placeholder="Your name"
                    >
                </div>


                <div>
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700"
                    >
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none focus:border-gray-500"
                        placeholder="you@example.com"
                    >
                </div>


                <div>
                    <label
                        for="password"
                        class="block text-sm font-medium text-gray-700"
                    >
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none focus:border-gray-500"
                        placeholder="••••••••"
                    >
                </div>


                <div>
                    <label
                        for="password_confirmation"
                        class="block text-sm font-medium text-gray-700"
                    >
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-2.5 outline-none focus:border-gray-500"
                        placeholder="••••••••"
                    >
                </div>


                <button
                    type="submit"
                    class="w-full rounded-lg bg-gray-900 px-4 py-3 font-medium text-white hover:bg-gray-700"
                >
                    Create Account
                </button>

            </form>
            <p class="mt-6 text-center text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="font-medium text-black underline">
                    Login
                </a>
            </p>

        </div>

    </section>

@endsection
