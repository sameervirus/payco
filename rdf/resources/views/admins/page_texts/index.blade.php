<x-guest-layout>
    <div class="mx-auto lg:w-1/2">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold">Page Texts</h1>
            <a href="{{ route('admins.page_texts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Create New</a>
        </div>

        <table class="w-full border-collapse bg-gray-400">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="text-left py-2 px-4">Title</th>
                    <th class="text-left py-2 px-4">Content</th>
                    <th class="text-right py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pageTexts as $pageText)
                    <tr class="border-t">
                        <td class="py-2 px-4">{{ $pageText->title }}</td>
                        <td class="py-2 px-4">{{ $pageText->content }}</td>
                        <td class="py-2 px-4 text-right">
                            <a href="{{ route('admins.page_texts.edit', $pageText) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-3 rounded">Edit</a>
                            <form action="{{ route('admins.page_texts.destroy', $pageText) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-3 rounded ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-2 px-4 text-center">No page texts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-guest-layout>
