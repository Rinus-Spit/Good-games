@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                @foreach ($games as $game)
                    <li class="first">
                        <h3>
                            
                        
                        <form  method="post" action="{{ route('games.destroy',$game->id,false) }}">
                    @csrf
                    @method('DELETE')
                            <a href="/games/{{ $game->id }}/edit"> {{ $game->title }} </a>
                            <button class="btn" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        </h3>
                    </li>
                @endforeach
                </ul>

            </div>

@endsection
