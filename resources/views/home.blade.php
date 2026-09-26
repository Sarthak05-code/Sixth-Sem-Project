<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>SubShare</title>
</head>

<body class="bg-white text-gray-900">

    <!-- Navigation -->
    <nav class="border-b border-gray-200">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <a href="/" class="text-xl font-bold">
                SubShare
            </a>

            <div class="flex items-center gap-6">
                <a href="#" class="text-sm text-gray-600 hover:text-gray-900">
                    Notes
                </a>

                <a href="#" class="text-sm text-gray-600 hover:text-gray-900">
                    Login
                </a>

                <a
                    href="#"
                    class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-700"
                >
                    Get Started
                </a>
            </div>

        </div>
    </nav>


    <!-- Hero -->
    <main>

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

    </main>

</body>
</html>