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
                        @if ( $game->image )
                        <div class="image">
                            <img src="{{ $game->image }}" alt="image" class="img-fluid">
                        </div>
                        @endif
                    </li>
                @endforeach
                </ul>
                {{ $games->links() }}
            </div>
        </div>
    </div>

@endsection
