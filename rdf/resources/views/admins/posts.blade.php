<x-guest-layout>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
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
                    <td class="font-normal leading-normal text-sm">
                        <a href="{{route('admin.posts.edit', $post)}}">Edit</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('del_{{$post->id}}').click();" data-id="{{ $post->id }}">Delete</a>
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
    <script>
        $('.table').dataTable();
    </script>
</x-guest-layout>
