@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                    <li class="first">
                        <h3>{{ $games->title }}</h3>
                        <div class="excerpt">
                            <img href="{{ $games->excerpt }}">
                        </div>
                        <div class="description">
                            <img href="{{ $games->body }}">
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
