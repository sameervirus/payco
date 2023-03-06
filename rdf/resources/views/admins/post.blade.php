<x-app-layout>
    <div class="mx-10">
    <form method="POST" action="{{ route('posts.store') }}" class="max-w-xl mx-auto">
        @csrf

        <div class="mb-4">
            <label for="title" class="block font-medium text-gray-700 mb-2">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required autofocus class="form-input w-full @error('title') border-red-500 @enderror">
            @error('title')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="body" class="block font-medium text-gray-700 mb-2">Body</label>
            <textarea id="body" name="body" rows="5" required class="form-input w-full @error('body') border-red-500 @enderror">{{ old('body') }}</textarea>
            @error('body')
            <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category" class="block font-medium text-gray-700 mb-2">Categories</label>
            <input type="text" id="category" name="category" value="{{ old('category') }}" required class="form-input w-full @error('category') border-red-500 @enderror">
            <small class="block text-gray-500">Enter comma-separated values for multiple categories</small>
        </div>

        <div class="mb-4">
            <label for="category_list" class="block font-medium text-gray-700 mb-2">Available Categories</label>
            <input type="text" id="category_list" name="category_list" list="category-list" class="form-input w-full">
            <datalist id="category-list">
            @foreach ($categories as $category)
                <option value="{{ $category->name }}"></option>
            @endforeach
            </datalist>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create Post</button>
        </div>
    </form>

</x-app-layout>
