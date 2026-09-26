@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="mx-auto max-w-md px-6 py-16">

    <h1 class="text-3xl font-bold">
        Welcome Back
    </h1>

    <p class="mt-2 text-sm text-gray-600">
        Sign in to access your notes.
    </p>

    @if ($errors->any())
        <div class="mt-6 rounded-lg border border-red-200 bg-red-50 p-4">
            <ul class="list-disc pl-5 text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/login" class="mt-8 space-y-6">

        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-black focus:outline-none"
                required
            >
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-black focus:outline-none"
                required
            >
        </div>

        <button
            type="submit"
            class="w-full rounded-lg bg-black px-6 py-3 text-white hover:bg-gray-800"
        >
            Login
        </button>

    </form>

    <p class="mt-6 text-center text-sm text-gray-600">
        Don't have an account?
        <a href="{{ route('register') }}" class="font-medium text-black underline">
            Register
        </a>
    </p>

</div>

@endsection
