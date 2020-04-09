@extends ('layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                @foreach ($games as $game)
                    <li class="first">
                        <h3>
                            <a href="/games/{{ $game->id }}/edit"> {{ $game->title }} </a>
                        </h3>
                    </li>
                @endforeach
                </ul>

            </div>

@endsection
