@extends ('layouts.layout')

@section ('content')

<?php
$game_user = $game->users()->find(auth()->user()->id, ['game_user.id']);
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
                        <div class="image">
                            <img src="{{ $game->image }}" alt="image" class="img-fluid">
                        </div>
                        <div class="description">
                            {{ $game->body }}
                        </div>
                        <div class="categories">
                        @foreach ($game->categories as $category)
                            <a href="/games?category={{ $category->name }}">{{ $category->name }}</a>
                        @endforeach
                        </div>
                        <!-- <form action="/games/{{ $game->id}}/Review"> -->
                        <a href="/games/{{ $game->id}}/star?star=1"><i class="fa fa-star text-warning" aria-hidden="true" id="star1"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=2"><i class="fa fa-star text-warning" aria-hidden="true" id="star2"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=3"><i class="fa fa-star text-warning" aria-hidden="true" id="star3"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=4"><i class="fa fa-star text-warning" aria-hidden="true" id="star4"></i></a>
                        <a href="/games/{{ $game->id}}/star?star=5"><i class="fa fa-star text-warning" aria-hidden="true" id="star5"></i></a>

                        <a href="/games/{{ $game->id}}/Review"><button class="btn btn-info">Schrijf een Review</button></a>
                        <!-- </form> -->
                        <div class="Reviews">
                        @foreach ($game->Review as $review)
                        <div class="Review">
                            @if ($review->id === auth()->user()->id)
                            <form  method="post" action="{{ route('Reviews.destroy',$review->pivot->id,false) }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="game_id" value="{{$game->id }}">
                            <a href="/Reviews/{{$game->id }}/{{$review->pivot->id}}/edit">
                            @endif
                            {{ $review->pivot->body }}
                            @if ($review->id === auth()->user()->id)
                            <button class="btn" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </a>
                            </form>
                            @endif
                        </div>
                        @endforeach
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection
