@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Nieuwe Review voor {{$game->title}}</h1>

                <form method="post" action="/Reviews">
                    @csrf
                    <input type="hidden" name="game_id" value="{{$game->id}}">
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                    <div class="field">
                        <label class="label" for="body">naam</label>
                        <div class="control">
                            <textarea 
                                class="input @error('body') alert_danger @enderror" 
                                type="text" 
                                name="body" 
                                id="categorie_body">{{ old('body') }}</textarea>
                        @error('name')
                            <p class="help alert_danger">{{ $errors->first('body') }}</p>
                        @enderror
                        </div>
                    </div>


                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Voeg Review toe</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection
