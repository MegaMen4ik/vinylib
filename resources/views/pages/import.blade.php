<x-app-layout>
    <form action="{{route('importBands')}}" method="post" enctype="multipart/form-data">
    @csrf <!-- {{ csrf_field() }} -->
        <input name="imported" type="file" id="imported" accept=".xlsx">
        <input type="submit">
    </form>
</x-app-layout>
