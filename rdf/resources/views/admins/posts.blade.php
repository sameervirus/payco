<x-admin-layout>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Blog</h1>
        </div>
    </div>

    <div class="mx-5">
        @if(session('success'))
        <div class="text-white text-2xl text-center mt-2 mb-5 alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="w-full max-w-full">
        <div class="flex justify-end">
            <a href="{{route('admin.posts.create')}}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Create Post</a>
        </div>
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="table-responsive p-10">
            <table class="table table-flush text-slate-500" datatable id="datatable-search">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Categories</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="font-normal leading-normal text-sm">{{ $post->id }}</td>
                        <td class="font-normal leading-normal text-sm">{{ $post->title }}</td>
                        <td class="font-normal leading-normal text-sm">{{ implode(', ' , $post->categories->pluck('name')->toArray()) }}</td>
                        <td class="font-normal leading-normal text-sm">{{ $post->created_at->format('Y-m-d') }}</td>
                        <td class="font-normal leading-normal text-sm flex">
                            <a href="{{route('admin.posts.edit', $post)}}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-3 rounded">Edit</a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('del_{{$post->id}}').click();" data-id="{{ $post->id }}" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded ml-2">Delete</a>
                            <form
                                method="POST"
                                action="{{ route('admin.posts.destroy' , $post) }}"
                                onsubmit="return confirm('Are you sure detate this item');">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button type="submit" class="hidden" id="del_{{$post->id}}">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

</x-admin-layout>
