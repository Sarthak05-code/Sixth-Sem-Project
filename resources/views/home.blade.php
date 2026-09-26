@extends('layouts.app')

@section('title', 'SubShare')

@section('content')

    <!-- Hero -->
    <section class="mx-auto max-w-7xl px-6 py-24">

        <div class="mx-auto max-w-3xl text-center">

            <p class="mb-4 text-sm font-medium uppercase tracking-wider text-gray-500">
                Simple note taking
            </p>

            <h1 class="text-5xl font-bold tracking-tight sm:text-6xl">
                Your notes,
                <span class="text-gray-500">organized.</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">
                Capture your ideas, organize your thoughts, and find
                what you need without the clutter.
            </p>

            <div class="mt-8 flex justify-center gap-4">

                <a
                    href="#"
                    class="rounded-lg bg-gray-900 px-6 py-3 font-medium text-white hover:bg-gray-700"
                >
                    Get Started
                </a>

                <a
                    href="#"
                    class="rounded-lg border border-gray-300 px-6 py-3 font-medium hover:bg-gray-50"
                >
                    Learn More
                </a>

            </div>

        </div>

    </section>


    <!-- Features -->
    <section class="border-t border-gray-200 bg-gray-50">

        <div class="mx-auto max-w-7xl px-6 py-20">

            <div class="mx-auto max-w-2xl text-center">

                <p class="text-sm font-medium uppercase tracking-wider text-gray-500">
                    Everything you need
                </p>

                <h2 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">
                    Keep your notes under control
                </h2>

                <p class="mt-4 text-gray-600">
                    A simple workspace for writing, organizing, and finding
                    the information that matters to you.
                </p>

            </div>


            <div class="mt-12 grid gap-6 md:grid-cols-3">

                <div class="rounded-xl border border-gray-200 bg-white p-6">

                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gray-100">
                        <span class="text-lg">+</span>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold">
                        Create notes
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Quickly capture ideas, reminders, and important
                        information in one place.
                    </p>

                </div>


                <div class="rounded-xl border border-gray-200 bg-white p-6">

                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gray-100">
                        <span class="text-lg">#</span>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold">
                        Organize with tags
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Group your notes with tags so related information
                        is easier to find.
                    </p>

                </div>


                <div class="rounded-xl border border-gray-200 bg-white p-6">

                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gray-100">
                        <span class="text-lg">⌕</span>
                    </div>

                    <h3 class="mt-5 text-lg font-semibold">
                        Find anything
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-600">
                        Search through your notes by title, content, or
                        tags whenever you need them.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="border-t border-gray-200">

        <div class="mx-auto max-w-4xl px-6 py-24 text-center">

            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">
                Start organizing your notes
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-gray-600">
                Keep your ideas in one place and make them easier to
                manage, search, and revisit.
            </p>

            <div class="mt-8">

                <a
                    href="#"
                    class="inline-flex rounded-lg bg-gray-900 px-6 py-3 font-medium text-white hover:bg-gray-700"
                >
                    Get Started
                </a>

            </div>

        </div>

    </section>

@endsection
