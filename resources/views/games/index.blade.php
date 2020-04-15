@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                @foreach ($games as $game)
                    <li class="">
                        <h3>
                            <a href="{{ route('games.show', $game) }}"> {{ $game->title }} </a>
                        </h3>
                        <div class="excerpt">
                            {{ $game->excerpt }}
                        </div>
                    </li>
                @endforeach
                </ul>

            </div>
        </div>
    </div>

@endsection
