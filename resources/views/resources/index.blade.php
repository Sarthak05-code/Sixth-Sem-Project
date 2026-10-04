@php
    use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Educational Resources') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Create Resource --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-4">
                        Share a Resource
                    </h3>

                    <form method="POST" action="{{ route('resources.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Title')" />

                            <x-text-input id="title" name="title" type="text" class="block mt-1 w-full"
                                :value="old('title')" required />

                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" />

                            <textarea id="description" name="description" rows="4"
                                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>

                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="category" :value="__('Category')" />

                            <x-text-input id="category" name="category" type="text" class="block mt-1 w-full"
                                :value="old('category')" placeholder="e.g. Mathematics" required />

                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="url" :value="__('Resource URL')" />

                            <x-text-input id="url" name="url" type="url" class="block mt-1 w-full"
                                :value="old('url')" placeholder="https://example.com" />

                            <x-input-error :messages="$errors->get('url')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="file" :value="__('Upload File')" />

                            <input id="file" name="file" type="file"
                                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"
                                accept=".pdf,.doc,.docx,.ppt,.pptx,.jpg,.jpeg,.png" />

                            <p class="mt-1 text-sm text-gray-500">
                                Maximum file size: 10 MB.
                            </p>

                            <x-input-error :messages="$errors->get('file')" class="mt-2" />
                        </div>

                        <x-primary-button>
                            {{ __('Share Resource') }}
                        </x-primary-button>

                    </form>

                </div>
            </div>

            {{-- Resource List --}}
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-semibold mb-4">
                        Available Resources
                    </h3>

                    @forelse ($resources as $resource)
                        <div class="border-b py-4">

                            <h4 class="font-semibold text-lg">
                                {{ $resource->title }}
                            </h4>

                            <p class="text-sm text-gray-500 mt-1">
                                Category: {{ $resource->category }}
                            </p>

                            @if ($resource->description)
                                <p class="mt-2 text-gray-700">
                                    {{ $resource->description }}
                                </p>
                            @endif

                            <p class="text-sm text-gray-500 mt-2">
                                Shared by {{ $resource->user->name }}
                            </p>

                            @if ($resource->institution)
                                <p class="text-sm text-gray-500">
                                    {{ $resource->institution->name }}
                                </p>
                            @endif

                            @if ($resource->url)
                                <a href="{{ $resource->url }}" target="_blank"
                                    class="inline-block mt-2 text-blue-600 hover:text-blue-800 underline">
                                    Open Resource
                                </a>
                            @endif

                            @if ($resource->file_path)
                                <a href="{{ Storage::url($resource->file_path) }}" target="_blank"
                                    class="inline-block mt-2 ml-4 text-blue-600 hover:text-blue-800 underline">
                                    Open Uploaded File
                                </a>
                            @endif

                        </div>

                    @empty

                        <p class="text-gray-600">
                            No resources have been shared yet.
                        </p>
                    @endforelse

                </div>
            </div>

        </div>
    </div>

</x-app-layout>
