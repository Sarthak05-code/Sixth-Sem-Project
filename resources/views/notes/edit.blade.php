@extends('layouts.app')

@section('title', 'Edit Note')

@section('content')

<div class="mx-auto max-w-3xl px-6 py-12">

    <div class="mb-8">
        <h1 class="text-3xl font-bold">
            Edit Note
        </h1>

        <p class="mt-2 text-gray-600">
            Update your note.
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
        action="{{ route('notes.update', $note->id) }}"
        class="space-y-6"
    >

        @csrf
        @method('PUT')

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
                value="{{ old('title', $note->title) }}"
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
            >{{ old('content', $note->content) }}</textarea>
        </div>

        <div class="flex items-center gap-4">

            <button
                type="submit"
                class="rounded-lg bg-black px-6 py-3 text-sm font-medium text-white hover:bg-gray-800"
            >
                Save Changes
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
