@extends('layouts.app')

@section('title', 'My Notes')

@section('content')

    <section class="mx-auto max-w-7xl px-6 py-12">

        <div class="flex items-center justify-between">

            <div>
                <h1 class="text-3xl font-bold">
                    My Notes
                </h1>

                <p class="mt-2 text-gray-600">
                    Create and manage your notes.
                </p>
            </div>

            <a
                href="{{ route('notes.create') }}"
                class="rounded-lg bg-gray-900 px-5 py-3 text-sm font-medium text-white hover:bg-gray-700"
            >
                + New Note
            </a>

        </div>


        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @forelse ($notes as $note)

            <article class="rounded-xl border border-gray-200 bg-white p-6">

                <h2 class="text-lg font-semibold">
                    {{ $note->title }}
                </h2>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    {{ $note->content }}
                </p>

                <div class="mt-5 flex items-center justify-between">

                    <span class="rounded-md bg-gray-100 px-2 py-1 text-xs text-gray-600">
                        {{ $note->is_archived ? 'Archived' : 'Active' }}
                    </span>

                    <div class="flex gap-4">

                        <a
                            href="{{ route('notes.edit', $note->id) }}"
                            class="text-sm font-medium text-gray-700 hover:text-black"
                        >
                            Edit
                        </a>

                        <form
                            method="POST"
                            action="{{ route('notes.destroy', $note->id) }}"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="text-sm font-medium text-red-600 hover:text-red-800"
                            >
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </article>

            @empty

                <p class="text-sm text-gray-500">
                    You don't have any notes yet.
                </p>

            @endforelse

        </div>

    </section>

@endsection
