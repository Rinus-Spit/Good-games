@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Pas game aan</h1>

                <form method="post" action="/games/{{ $game->id }}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="title">Titel</label>
                        <div class="control">
                            <input class="input" type="text" name="title" id="game_title" value="{{ $game->title }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Samenvatting</label>
                        <div class="control">
                            <input class="input" type="text" name="excerpt" id="game_excerpt" value="{{ $game->excerpt }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Beschrijving</label>
                        <div class="control">
                            <input class="input" type="text" name="body" id="game_body" value="{{ $game->body }}">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Pas game aan</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection
