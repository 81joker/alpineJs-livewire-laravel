<div>

    <div
    x-data="{
        search: '',
 
        items: [],
 
        get filteredItems() {
            return this.items.filter(
                i => i.startsWith(this.search)
            )
        }
    }"
>
    <input x-model="search" placeholder="Search...">
 
    <ul>
        <template x-for="item in filteredItems" :key="item">
            <li x-text="item"></li>
        </template>
    </ul>
</div>
@if (count($items) > 0)
<div class="overflow-x-auto py-9">
    <table class="table table-md">
        <thead class="bg-base-200">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $invoice)
                <tr>
                    <td>{{ $invoice['name'] }}</td>
                    <td>{{ $invoice['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
</div>
