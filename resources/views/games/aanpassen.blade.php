@extends ('layout')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div class="content">
                <ul class="style1">
                @foreach ($profielen as $profiel)
                    <li class="first">
                        <h3>
                            <a href="/profielen/{{ $profiel->id }}/edit"> {{ $profiel->naam }} </a>
                        </h3>
                        <div class="foto">
                            <img href="{{ $profiel->foto }}">
                        </div>
                    </li>
                @endforeach
                </ul>

            </div>

@endsection
