@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                @foreach ($games as $game)
                    <li class="">
                        <h3>
                            <a href="{{ route('games.show', $game) }}"> {{ $game->naam }} </a>
                        </h3>
                        <div class="excerpt">
                            <img href="{{ $game->excerpt }}">
                        </div>
                    </li>
                @endforeach
                </ul>

            </div>

@endsection
