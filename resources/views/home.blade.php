@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Goodgames</div>

                <div class="card-body">
                        @guest
                    Welkom gast
                        @else
                    Welkom {{ Auth::user()->name }}
                        @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
