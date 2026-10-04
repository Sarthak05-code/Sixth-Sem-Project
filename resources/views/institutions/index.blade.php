<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Institutions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-4">
                        Add Institution
                    </h3>

                    <form method="POST" action="{{ route('institutions.store') }}">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Institution Name')" />

                            <x-text-input id="name" name="name" type="text" class="block mt-1 w-full"
                                :value="old('name')" required />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="email_domain" :value="__('Email Domain')" />

                            <x-text-input id="email_domain" name="email_domain" type="text" class="block mt-1 w-full"
                                :value="old('email_domain')" placeholder="example.edu.np" />

                            <x-input-error :messages="$errors->get('email_domain')" class="mt-2" />
                        </div>

                        <x-primary-button>
                            {{ __('Create Institution') }}
                        </x-primary-button>
                    </form>

                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-4">
                        Existing Institutions
                    </h3>

                    @forelse ($institutions as $institution)
                        <div class="border-b py-3">
                            <p class="font-medium">
                                {{ $institution->name }}
                            </p>

                            @if ($institution->email_domain)
                                <p class="text-sm text-gray-600">
                                    {{ $institution->email_domain }}
                                </p>
                            @endif
                        </div>

                    @empty

                        <p class="text-gray-600">
                            No institutions have been added yet.
                        </p>
                    @endforelse

                </div>
            </div>

        </div>
    </div>

</x-app-layout>
