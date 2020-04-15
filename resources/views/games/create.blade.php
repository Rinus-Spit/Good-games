@extends ('layouts.layout')

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

            <div class="row">
                <div class="col-xs-12 form-group">
                    
                    <label class="control-label" for="category">Categorieën</label>
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
                        Select all
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
                        Deselect all
                    </button>
                    <!--  ('category[]', $categories, old('category'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-category' ])  -->
                    <select id="category" multiple name="category[]">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                            <button class="button is-link" type="submit">Submit</button>
                        </div>

                    </div>
                </form>


            </div>

@endsection
