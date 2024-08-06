@extends('layouts.homepage')

@section('content')
<div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
    <div class="flex items-center justify-center p-6 sm:p-12">
        <div class="w-full">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Survey Form
            </h1>
            <form method="POST" action="{{ route('survey.submit') }}" enctype="multipart/form-data">
                @csrf

                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Full Name</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jane Doe"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                    />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email Address</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Jane@example.com"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                    />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Country of Residence</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Country"
                        type="text"
                        name="country"
                        value="{{ old('country') }}"
                        required
                    />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Assistance Required</span>
                    <textarea
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Describe the assistance you require"
                        name="assistance"
                        required>{{ old('assistance') }}</textarea>
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Legal Case Number in Kenya (if any)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Case Number"
                        type="text"
                        name="case_number"
                        value="{{ old('case_number') }}"
                    />
                </label>
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Documents/Files Upload</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="file"
                        name="documents[]"
                        multiple
                    />
                </label>

                <button
                    class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    type="submit"
                >
                    Submit Survey
                </button>
            </form>

            @if (isset($survey))
                <ul>
                    @foreach ($survey->documents as $document)
                        <li><a href="{{ asset('storage/documents/' . basename($document)) }}">{{ basename($document) }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
