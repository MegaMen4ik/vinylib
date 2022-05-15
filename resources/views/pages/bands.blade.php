<x-app-layout>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created date</th>
            <th scope="col">Breakup date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bands as $band)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$band->name}}</td>
                <td>{{$band->starts_at}}</td>
                <td>
                @if(!empty($band->ends_at))
                {{$band->ends_at}}
                @else
                Still playing
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
