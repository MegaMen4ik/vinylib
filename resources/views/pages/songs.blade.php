<x-app-layout>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Artist</th>
            <th scope="col">Album</th>
            <th scope="col">Release date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($songs as $song)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$song->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
