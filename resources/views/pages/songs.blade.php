<x-app-layout>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Artist/Band</th>
            <th scope="col">Album</th>
            <th scope="col">Release date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($songs as $song)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$song->name}}</td>
            @if(!empty($song->album))
                <td>
                    @foreach($song->album->executors as $executor)
                        @if($loop->index !== 0)
                            ,
                        @endif
                        {{$executor->executor->name}}
                        @if(!empty($executor->executor->surname))
                            {{$executor->executor->surname}}
                        @endif
                    @endforeach
                </td>
                <td>{{$song->album->name}}
                </td>
            @endif
            @if(!empty($song->album) && !empty($song->album->release_date))
                <td>{{$song->album->release_date}}</td>
            @elseif(!empty($song->release_date))
                <td>{{$song->release_date}}</td>
            @else
                <td>-</td>
            @endif
        </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
