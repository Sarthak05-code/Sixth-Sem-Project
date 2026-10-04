```blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SubShare</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navbar -->
    <nav class="border-b bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <!-- Logo -->
            <a href="/" class="text-2xl font-bold text-indigo-600">
                SubShare
            </a>

            <!-- Navigation -->
            <div class="flex items-center gap-6">
                <a href="/" class="text-gray-700 hover:text-indigo-600">
                    Home
                </a>

                <a href="/login" class="text-gray-700 hover:text-indigo-600">
                    Login
                </a>

                <a href="/register" class="rounded-lg bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700">
                    Register
                </a>
            </div>

        </div>
    </nav>


    <!-- Hero Section -->
    <main>

        <section class="mx-auto max-w-7xl px-6 py-24 text-center">

            <h1 class="text-4xl font-bold tracking-tight sm:text-6xl">
                Share subscriptions.
                <span class="text-indigo-600">Save together.</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600">
                SubShare helps people discover and manage shared
                subscription plans in one place.
            </p>

            <div class="mt-8 flex justify-center gap-4">

                <a href="/register"
                    class="rounded-lg bg-indigo-600 px-6 py-3 font-semibold text-white hover:bg-indigo-700">
                    Get Started
                </a>

                <a href="/login"
                    class="rounded-lg border border-gray-300 bg-white px-6 py-3 font-semibold hover:bg-gray-100">
                    Login
                </a>

            </div>

        </section>


        <!-- How It Works -->
        <section class="bg-white py-20">

            <div class="mx-auto max-w-7xl px-6">

                <div class="text-center">
                    <h2 class="text-3xl font-bold">
                        How It Works
                    </h2>

                    <p class="mt-3 text-gray-600">
                        Getting started with SubShare is simple.
                    </p>
                </div>


                <div class="mt-12 grid gap-8 md:grid-cols-3">

                    <!-- Step 1 -->
                    <div class="rounded-xl border bg-gray-50 p-6">
                        <h3 class="text-xl font-semibold">
                            1. Find a Plan
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Browse subscription plans available for sharing.
                        </p>
                    </div>


                    <!-- Step 2 -->
                    <div class="rounded-xl border bg-gray-50 p-6">
                        <h3 class="text-xl font-semibold">
                            2. Join a Group
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Join an available shared subscription group.
                        </p>
                    </div>


                    <!-- Step 3 -->
                    <div class="rounded-xl border bg-gray-50 p-6">
                        <h3 class="text-xl font-semibold">
                            3. Manage Your Share
                        </h3>

                        <p class="mt-3 text-gray-600">
                            Keep track of your subscriptions and contributions.
                        </p>
                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- Footer -->
    <footer class="border-t bg-white">

        <div class="mx-auto max-w-7xl px-6 py-8 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} SubShare. All rights reserved.
        </div>

    </footer>

</body>

</html>
```
