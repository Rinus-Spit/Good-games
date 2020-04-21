@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Nieuwe categorie</h1>

                <form method="post" action="/categories">
                    @csrf

                    <div class="field">
                        <label class="label" for="title">naam</label>
                        <div class="control">
                            <input 
                                class="input @error('naam') alert-danger @enderror" 
                                type="text" 
                                name="name" 
                                id="categorie_name"
                                value="{{ old('name') }}">
                        @error('name')
                            <p class="help alert-danger">{{ $errors->first('name') }}</p>
                        @enderror
                        </div>
                    </div>


                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Voeg categorie toe</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection
