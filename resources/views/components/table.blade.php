
@if (session('message'))
<div class="mb-1 font-medium text-sm text-green-600">
    {{ session('message') }}
</div>
@endif

@if (count($invoices) > 0)
<div class="overflow-x-auto py-9">
    <table class="table table-md">
        <thead class="bg-base-200">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->name }}</td>
                    <td>{{ $invoice->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif