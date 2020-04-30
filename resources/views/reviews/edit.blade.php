@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Pas Review aan</h1>

                <form method="post" action="/Reviews/{{ $review->id }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="game_id" value="{{$game->id}}">
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                    <div class="field">
                        <label class="label" for="body">Beschrijving</label>
                        <div class="control">
                            <textarea class="input" type="text" name="body" id="Review_body" >{{ $review->body }}</textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Pas Review aan</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection

@section ('javascript')


@endsection