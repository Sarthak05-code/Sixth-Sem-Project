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
                href="#"
                class="rounded-lg bg-gray-900 px-5 py-3 text-sm font-medium text-white hover:bg-gray-700"
            >
                + New Note
            </a>

        </div>


        <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            <article class="rounded-xl border border-gray-200 bg-white p-6">

                <h2 class="text-lg font-semibold">
                    Welcome to SubShare
                </h2>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    This is an example note. Later, this content will
                    come from the database.
                </p>

                <div class="mt-5 flex gap-2">

                    <span class="rounded-md bg-gray-100 px-2 py-1 text-xs text-gray-600">
                        Laravel
                    </span>

                    <span class="rounded-md bg-gray-100 px-2 py-1 text-xs text-gray-600">
                        Learning
                    </span>

                </div>

            </article>


            <article class="rounded-xl border border-gray-200 bg-white p-6">

                <h2 class="text-lg font-semibold">
                    Project Ideas
                </h2>

                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Ideas and features that we want to implement
                    in the SubShare application.
                </p>

                <div class="mt-5 flex gap-2">

                    <span class="rounded-md bg-gray-100 px-2 py-1 text-xs text-gray-600">
                        Ideas
                    </span>

                </div>

            </article>

        </div>

    </section>

@endsection
