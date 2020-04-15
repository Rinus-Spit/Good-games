@extends ('layouts.layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                @foreach ($categories as $category)
                    <li class="first">
                        <h3>
                            
                        
                        <form  method="post" action="{{ route('categories.destroy',$category->id,false) }}">
                    @csrf
                    @method('DELETE')
                            <a href="/categories/{{ $category->id }}/edit"> {{ $category->name }} </a>
                            <button class="btn" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        </h3>
                    </li>
                @endforeach
                </ul>
                <h3>
                    <a href="/categories/create"> Categorie toevoegen </a>
                </h3>

            </div>


@endsection
