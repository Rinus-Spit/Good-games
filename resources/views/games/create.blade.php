@extends ('layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Nieuw game</h1>

                <form method="post" action="/games">
                    @csrf

                    <div class="field">
                        <label class="label" for="title">Titel</label>
                        <div class="control">
                            <input 
                                class="input @error('naam') is-danger @enderror" 
                                type="text" 
                                name="title" 
                                id="game_title"
                                value="{{ old('title') }}">
                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="excerpt">Samenvatting</label>
                        <div class="control">
                            <input 
                                class="input @error('excerpt') is-danger @enderror" 
                                type="text" 
                                name="excerpt" 
                                id="game_excerpt"
                                value="{{ old('excerpt') }}">
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Beschrijving</label>
                        <div class="control">
                            <input 
                                class="input @error('body') is-danger @enderror" 
                                type="text" 
                                name="body" 
                                id="game_body"
                                value="{{ old('body') }}">
                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection
