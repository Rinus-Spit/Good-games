@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Pas categorie aan</h1>

                <form method="post" action="/categories/{{ $category->id }}">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label class="label" for="name">Naam</label>
                        <div class="control">
                            <input class="input" type="text" name="name" id="category_name" value="{{ $category->name }}">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Pas categorie aan</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection
