<x-admin-layout>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Website Text</h1>
        </div>
    </div>
    <div class="lg:mx-20 my-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold">Page Texts</h1>
            <!-- <a href="{{ route('admins.page_texts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Create New</a> -->
        </div>

        <table class="table w-full border-collapse" datatable>
            <thead>
                <tr class="">
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
                        <td class="py-2 px-4 text-right flex">
                            <a href="{{ route('admins.page_texts.edit', $pageText) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-3 rounded">Edit</a>
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
</x-admin-layout>
