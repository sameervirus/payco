<x-app-layout>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <div class="mx-5">
        <div class="w-full max-w-full">
        <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="table-responsive p-10">
            <table class="table table-flush text-slate-500" datatable id="datatable-search">
                <thead class="thead-light">
                <tr>
                    <th>Business</th>
                    <th>Industry</th>
                    <th>Country</th>
                    <th>Import</th>
                    <th>Export</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Inquiry</th>
                </tr>
                </thead>
                <tbody>
                @foreach($feeds as $feed)
                <tr>
                    <td class="font-normal leading-normal text-sm">{{ $feed->business }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->industry }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->country->name }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->import ?? '' }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->export ?? '' }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->person }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->email }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->phone }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->subject }}</td>
                    <td class="font-normal leading-normal text-sm">{{ $feed->inquiry }}</td>
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
</x-app-layout>
