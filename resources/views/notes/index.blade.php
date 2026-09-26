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
        <form method="GET" action="{{ route('notes') }}" class="mt-8 flex gap-3">

            @if (request('filter'))
                <input type="hidden" name="filter" value="{{ request('filter') }}">
            @endif

            @if (request('tag'))
                <input type="hidden" name="tag" value="{{ request('tag') }}">
            @endif

            <input
                type="text"
                name="search"
                id="note-search"
                value="{{ request('search') }}"
                placeholder="Search notes..."
                class="flex-1 rounded-lg border border-gray-300 px-4 py-3 text-sm focus:border-gray-500 focus:outline-none"
            >

            <button
                type="submit"
                class="rounded-lg bg-gray-900 px-5 py-3 text-sm font-medium text-white hover:bg-gray-700"
            >
                Search
            </button>

            @if (request('search'))
                <a
                    href="{{ route('notes') }}"
                    class="rounded-lg border border-gray-200 px-5 py-3 text-sm font-medium text-gray-700 hover:bg-gray-50"
                >
                    Clear
                </a>
            @endif

        </form>

        <div class="mt-8 flex gap-3">


            <a
                href="{{ route('notes') }}"
                class="{{ request('filter') !== 'archived'
                    ? 'bg-gray-900 text-white'
                    : 'border border-gray-200 text-gray-700 hover:bg-gray-50'
                }} rounded-lg px-4 py-2 text-sm font-medium"
            >
                All Notes
            </a>

            <a
                href="{{ route('notes', ['filter' => 'archived']) }}"
                class="{{ request('filter') === 'archived'
                    ? 'bg-gray-900 text-white'
                    : 'border border-gray-200 text-gray-700 hover:bg-gray-50'
                }} rounded-lg px-4 py-2 text-sm font-medium"
            >
                Archived
            </a>

        </div>
        @if ($tags->isNotEmpty())

            <div class="mt-4 flex flex-wrap gap-2">

                @foreach ($tags as $tag)

                    <a
                        href="{{ route('notes', ['tag' => $tag->name]) }}"
                        class="{{ request('tag') === $tag->name
                            ? 'bg-gray-900 text-white'
                            : 'border border-gray-200 text-gray-700 hover:bg-gray-50'
                        }} rounded-lg px-3 py-2 text-xs font-medium"
                    >
                        {{ $tag->name }}
                    </a>

                @endforeach

            </div>

        @endif


        <div id="notes-grid" class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @forelse ($notes as $note)
                <article
                    class="note-card rounded-xl border border-gray-200 bg-white p-6"
                    data-search="{{ strtolower($note->title . ' ' . $note->content . ' ' . $note->tags->pluck('name')->implode(' ')) }}"
                >

                <h2 class="text-lg font-semibold">
                    {{ $note->title }}
                </h2>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    {{ $note->content }}
                </p>
                @if ($note->tags->isNotEmpty())

                    <div class="mt-4 flex flex-wrap gap-2">

                        @foreach ($note->tags as $tag)

                            <span class="rounded-md bg-gray-100 px-2 py-1 text-xs text-gray-600">
                                {{ $tag->name }}
                            </span>

                        @endforeach

                    </div>

                @endif

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

                        @if (!$note->is_archived)

                            <form
                                method="POST"
                                action="{{ route('notes.archive', $note->id) }}"
                            >
                                @csrf
                                @method('PUT')

                                <button
                                    type="submit"
                                    class="text-sm font-medium text-gray-700 hover:text-black"
                                >
                                    Archive
                                </button>
                            </form>

                        @else

                            <form
                                method="POST"
                                action="{{ route('notes.unarchive', $note->id) }}"
                            >
                                @csrf
                                @method('PUT')

                                <button
                                    type="submit"
                                    class="text-sm font-medium text-gray-700 hover:text-black"
                                >
                                    Unarchive
                                </button>
                            </form>

                        @endif

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
        <p id="no-search-results" class="mt-10 hidden text-sm text-gray-500">No matching notes found.</p>

    </section>

@endsection
