@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <h1>Pas game aan</h1>

                <form method="post" action="/games/{{ $game->id }}"  enctype="multipart/form-data">
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

                    <input id="file-upload" type="file" name="image" accept="image/*" onchange="readURL(this);">
                        <label for="file-upload" id="file-drag">
                        <img src="{{ $game->image }}" alt="image" class="img-fluid">
                        </label>

                    <div class="row">
                <div class="col-xs-12 form-group">
                    
                    <label class="control-label" for="category">Categorieën</label>
                    <!-- <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
                        Select all 
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
                        Deselect all
                    </button> -->
                    <!--  ('category[]', $categories, old('category'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-category' ])  -->
                    <select id="category" multiple name="category[]">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ ($game->hasCategory($category)) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                    </select>

                    <p class="help-block"></p>
                    @if($errors->has('category'))
                        <p class="help-block">
                            {{ $errors->first('category') }}
                        </p>
                    @endif
                </div>
            </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="btn btn-success is-link" type="submit">Pas game aan</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection

@section ('javascript')


@endsection