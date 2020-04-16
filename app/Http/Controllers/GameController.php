<?php

namespace App\Http\Controllers;

use App\Game;
use App\category;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('category')) {
            $games = Category::where('name',request('category'))->firstOrFail()->games;
        } else {
            $games = Game::latest()->get();
        }
        //dd($games);

        return view('games.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('games.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = Game::create($this->validateGame());
        $game->category()->sync((array)$request->input('category'));
        //dd($request);

        return redirect(route('games.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $categories = category::all();

        return view('games.edit', ['game' => $game], ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->update($this->validateGame());
        $game->category()->sync((array)$request->input('category'));

        return redirect(route('games.indexedit', $game));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete($game);

        return redirect(route('games.indexedit'));
    }

    public function indexedit()
    {
        $games = Game::latest()->get();

        return view('games.indexedit', ['games' => $games]);
    }

    /**
     * Give the game stars.
     *
     * @param  \App\Game  $game
     * @return redirect \Illuminate\Http\Response
     */
    public function star(Game $game)
    {
        if (request('star')) {
            $user = auth()->user();
            $game->user()->syncWithoutDetaching([$user->id => ['stars' => request('star')]]);
        }

        return redirect(route('games.show', ['game' => $game]));
    }

    protected function validategame()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

    public function home()
    {
        $games = Game::latest()->get();

        return view('home', ['games' => $games]);
    }

}
