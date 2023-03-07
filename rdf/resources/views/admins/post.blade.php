<x-guest-layout>
    <div class="flex mx-auto lg:w-1/2">

    <form method="POST" action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" enctype="multipart/form-data">
            @csrf
            @if(isset($post))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', isset($post) ? $post->title : '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="body" class="block text-gray-700 font-bold mb-2">Body</label>
                <textarea name="body" id="body" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('body', isset($post) ? $post->body : '') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="categories" class="block text-gray-700 font-bold mb-2">Categories</label>
                @foreach($categories as $category)
                    <div class="flex items-center">
                        <input type="checkbox" name="categories[]" id="category_{{ $category->id }}" value="{{ $category->id }}" @if(isset($post) && $post->categories->contains($category->id)) checked @endif class="mr-2">
                        <label for="category_{{ $category->id }}" class="text-gray-700">{{ $category->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="mb-4">
                <label for="photo" class="block text-gray-700 font-bold mb-2">Photo</label>
                <input type="file" name="photo" id="photo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if(isset($post) && $post->photo)
                    <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" class="mt-2 w-32 h-[100px]">
                @endif
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ isset($post) ? 'Update' : 'Create' }}
                </button>
                <a href="{{ route('admin.posts.index') }}" class="text-gray-700 font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
            </div>
        </form>


</x-guest-layout>
