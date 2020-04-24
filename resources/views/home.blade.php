@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Goodgames</div>

                <div class="card-body">
                        @guest
                    Welkom gast!
                        @else
                    Welkom {{ Auth::user()->name }}
                        @endguest

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($games as $game)
        <div class="col-md-4">
            <!-- <div class="card"> -->
                <div class="card-header">
                    <a href="{{ route('games.show', $game) }}"> {{ $game->title }} </a>
                </div>
                <div class="card-body">
                    {{ $game->excerpt }}
                </div>
                @if ( $game->image )
                <div class="image">
                    <img src="{{ $game->image }}" alt="image" class="img-fluid">
                </div>
                @endif
            <!-- </div> -->
        </div>
        @endforeach
        {{ $games->links() }}
    </div>
    <div>
        <?php
        $routes = Route::getRoutes();

        foreach ($routes as $route) {
           // get the route name.  
           echo $route->getActionname();
        
           // get the path
        //    echo $route->get('path');
        
           // get the action. Which controller method will be called.
        
        //    var_dump($route->getAction());
           echo '<p>';
        }
        ?>
    </div>
</div>
@endsection
