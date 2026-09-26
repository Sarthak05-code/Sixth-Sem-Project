@extends('layouts.app')

@section('title', 'Create Note')

@section('content')

<div class="mx-auto max-w-3xl px-6 py-12">

    <div class="mb-8">
        <h1 class="text-3xl font-bold">
            Create a Note
        </h1>

        <p class="mt-2 text-gray-600">
            Write down something you want to remember.
        </p>
    </div>

    @if ($errors->any())
        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4">
            <ul class="list-disc space-y-1 pl-5 text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        method="POST"
        action="{{ route('notes.store') }}"
        class="space-y-6"
    >

        @csrf

        <div>
            <label
                for="title"
                class="block text-sm font-medium text-gray-700"
            >
                Title
            </label>

            <input
                id="title"
                type="text"
                name="title"
                value="{{ old('title') }}"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-black focus:outline-none"
                required
            >
        </div>

        <div>
            <label
                for="content"
                class="block text-sm font-medium text-gray-700"
            >
                Content
            </label>

            <textarea
                id="content"
                name="content"
                rows="10"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-black focus:outline-none"
                required
            >{{ old('content') }}</textarea>
        </div>

        <div>
            <label
                for="tags"
                class="block text-sm font-medium text-gray-700"
            >
                Tags
            </label>
        
            <input
                type="text"
                name="tags"
                id="tags"
                value="{{ old('tags') }}"
                placeholder="Laravel, PHP, Database"
                class="mt-2 w-full rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-gray-500 focus:outline-none"
            >
        
            <p class="mt-2 text-xs text-gray-500">
                Separate multiple tags with commas.
            </p>
        
            @error('tags')
                <p class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="flex items-center gap-4">

            <button
                type="submit"
                class="rounded-lg bg-black px-6 py-3 text-sm font-medium text-white hover:bg-gray-800"
            >
                Create Note
            </button>

            <a
                href="{{ route('notes') }}"
                class="text-sm text-gray-600 hover:text-gray-900"
            >
                Cancel
            </a>

        </div>

    </form>

</div>

@endsection