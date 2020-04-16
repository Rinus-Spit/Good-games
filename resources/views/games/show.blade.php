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
                        @foreach ($game->category as $category)
                            <a href="/games?category={{ $category->name }}">{{ $category->name }}</a>
                        @endforeach
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
