<x-admin-layout>
    <div class="bg-gray-800 pt-3">
        <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
            <h1 class="font-bold pl-2">Website Users</h1>
        </div>
    </div>
    <div class="lg:mx-20 my-10">
            <table class="table table-flush text-slate-500" datatable id="datatable-search">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Verified at</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                <tr>
                    <td class="font-normal leading-normal text-sm">{{ $user->name }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $user->email }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $user->country->name }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $user->phone ?? '' }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $user->email_verified_at ?? '' }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    <script>
        $('.table').dataTable();
    </script>
</x-admin-layout>
