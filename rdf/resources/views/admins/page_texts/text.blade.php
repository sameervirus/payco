<x-admin-layout>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">{{ isset($pageText) ? $pageText->title : 'Create Page Text' }}</h1>
        </div>
    </div>
    <div class="mx-auto lg:w-1/2">
        <h1 class="text-2xl font-semibold">{{ isset($pageText) ? 'Edit' : 'Create' }} Page Text</h1>

        <form action="{{ isset($pageText) ? route('admins.page_texts.update', $pageText) : route('admins.page_texts.store') }}" method="POST" class="mt-6">
            @csrf
            @if(isset($pageText))
                @method('PATCH')
            @endif

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input disabled type="text" name="title" id="title" class="form-input w-full @error('title') border-red-500 @enderror" value="{{ isset($pageText) ? $pageText->title : old('title') }}">
                @error('title')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
                <textarea name="content" id="content" class="form-textarea w-full @error('content') border-red-500 @enderror" rows="8" required>{{ isset($pageText) ? $pageText->content : old('content') }}</textarea>
                @error('content')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">{{ isset($pageText) ? 'Update' : 'Create' }}</button>
                <a href="{{ route('admins.page_texts.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-4 rounded ml-4">Cancel</a>
            </div>
        </form>
    </div>
</x-admin-layout>
