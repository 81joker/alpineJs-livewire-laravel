<div>
    <h3 class="text-lg py-2">Upload Excel File</h3>
    <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input class="file-input file-input-bordered w-full max-w-xs" type="file" name="file">
            <button type="submit" class="btn btn-neutral px-7 ml-5">Import</button>
        </div>
    </form>
</div>
