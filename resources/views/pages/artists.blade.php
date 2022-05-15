<x-app-layout>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Band(s)</th>
            <th scope="col">Birth date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$artist->name}} {{$artist->surname}}</td>
                <td>
                    @foreach($artist->bands as $band)
                        @if($loop->index !== 0)
                            ,
                        @endif
                        {{$band->band->name}}
                    @endforeach
                </td>
                <td>
                    {{$artist->birth_date}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
