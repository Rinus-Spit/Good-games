@extends ('layouts.layout')

@section ('content')

<?php
$game_user = $game->user()->find(auth()->user()->id, ['game_user.id']);
if ( $game_user) {
    $stars = $game_user->pivot->stars;
} else {
    $stars = 0;
}
$showstars = '';
for ($i=0;$i<$stars;$i++) {
    $showstars .= '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
}
?>
    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                    <li class="first">
                        <h3>{{ $game->title }} {!! $showstars !!}</h3>
                        <div class="excerpt">
                            {{ $game->excerpt }}
                        </div>
                        <div class="description">
                            {{ $game->body }}
                        </div>
                        <div class="categories">
                        @foreach ($game->category as $category)
                            <a href="/games?category={{ $category->name }}">{{ $category->name }}</a>
                        @endforeach
                        </div>
                        <form action="/games/{{ $game->id}}/review">
                        <a href="/games/{{ $game->id}}/star?star=1"><i class="fa fa-star text-warning" aria-hidden="true" id="star1"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=2"><i class="fa fa-star text-warning" aria-hidden="true" id="star2"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=3"><i class="fa fa-star text-warning" aria-hidden="true" id="star3"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=4"><i class="fa fa-star text-warning" aria-hidden="true" id="star4"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=5"><i class="fa fa-star text-warning" aria-hidden="true" id="star5"></i></a>

                        <button type="submit">Schrijf een review</button>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
