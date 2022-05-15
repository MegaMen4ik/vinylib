<x-app-layout>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Artist/Band</th>
            <th scope="col">Release date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$album->name}}</td>
                <td>
                    @foreach($album->executors as $executor)
                        @if($loop->index !== 0)
                            ,
                        @endif
                        {{$executor->executor->name}}
                        @if(!empty($executor->executor->surname))
                            {{$executor->executor->surname}}
                        @endif
                    @endforeach
                </td>
                <td>
                    @if(!empty($album->release_date))
                        {{$album->release_date}}
                    @else
                        -
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
