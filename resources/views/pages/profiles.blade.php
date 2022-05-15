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
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
