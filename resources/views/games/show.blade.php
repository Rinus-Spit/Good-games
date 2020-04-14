@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                    <li class="first">
                        <h3>{{ $game->title }}</h3>
                        <div class="excerpt">
                            {{ $game->excerpt }}
                        </div>
                        <div class="description">
                            {{ $game->body }}
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
