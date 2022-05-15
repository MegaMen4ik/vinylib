<x-app-layout>
    <div class="main-block">
        <h1 class="h1">Our Data</h1>
        <div class="row">
            <div class="col">
                <div>
                    <canvas id="albums" style="background-size: calc(100% - 35px) calc(100% - 35px);background-position: 17px 35px;background-repeat: no-repeat;background-image: url('{{asset('/images/icons/vinyl-record.png')}}');"></canvas>
                    <a class="btn btn-primary" href="{{route('exportAlbums')}}">Export albums</a>
                </div>
            </div>
            <div class="col">
                <canvas id="songs" style="background-size: calc(100% - 35px) calc(100% - 35px);background-position: 17px 35px;background-repeat: no-repeat;background-image: url('{{asset('/images/icons/vinyl-record.png')}}');"></canvas>
                <a class="btn btn-primary" href="{{route('exportSongs')}}">Export songs</a>
            </div>
            <div class="col">
                <canvas id="artists" style="background-size: calc(100% - 35px) calc(100% - 35px);background-position: 17px 35px;background-repeat: no-repeat;background-image: url('{{asset('/images/icons/vinyl-record.png')}}');"></canvas>
                <a class="btn btn-primary" href="{{route('exportArtists')}}">Export artists</a>

            </div>
        </div>
    </div>
    <script>
        const albums = new Chart(document.getElementById('albums'), {
            type: 'doughnut',
            data: {
                labels: [@foreach($bands as $band) '{{$band['name']}}', @endforeach],
                datasets: [{
                    label: '# of Votes',
                    data: [@foreach($bands as $band) {{$band['albumsCount']}}, @endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text :'Albums of band'
                    }
                }
            }
        });
        const songs = new Chart(document.getElementById('songs'), {
            type: 'doughnut',
            data: {
                labels: [@foreach($bands as $band) '{{$band['name']}}', @endforeach],
                datasets: [{
                    label: '# of Votes',
                    data: [@foreach($bands as $band) {{$band['songsCount']}}, @endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text :'Songs of band'
                    }
                }
            }
        });
        const artists = new Chart(document.getElementById('artists'), {
            type: 'doughnut',
            data: {
                labels: [@foreach($bands as $band) '{{$band['name']}}', @endforeach],
                datasets: [{
                    label: '# of Votes',
                    data: [@foreach($bands as $band) {{$band['artistsCount']}}, @endforeach],
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text :'Artists of band'
                    }
                }
            }
        });
    </script>
</x-app-layout>
