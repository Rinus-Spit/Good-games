<?php

namespace App\Http\Controllers;

use App\Game;
use App\Category;
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
            $games = Category::where('name',request('category'))->firstOrFail()->games->paginate(6);
        } else {
            $games = Game::latest()->paginate(6);
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
        $categories = Category::all();
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
        $game->categories()->sync((array)$request->input('category'));
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
        $categories = Category::all();

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
        // dd(request('image'));
    //     request()->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //    ]);
    //    if ($files = $request->file('image')) {
    //        $destinationPath = 'public/images/'; // upload path
    //        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    //        $files->move($destinationPath, $profileImage);
    //     }
        $attributes = $this->validateGame();
        if (request('image')) {
            $attributes['image'] = request('image')->store('images');
        }
        // dd($attributes);
        $game->update($attributes);
        $game->categories()->sync((array)$request->input('category'));

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
        $games = Game::latest()->paginate(6);

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
            $game->users()->syncWithoutDetaching([$user->id => ['stars' => request('star')]]);
        }

        return redirect(route('games.show', ['game' => $game]));
    }

    protected function validateGame()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'image' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);
    }

    public function home()
    {
        $games = Game::get();
        $star_games = $games->map(function ($game) 
        {
            $game['stars'] = $game->stars();
            return $game;
        });
        $new_games = $star_games->sortByDesc('stars', SORT_NUMERIC)->paginate(6);
        //$new_games->values()->paginate(6);
        //dd($new_games);

        return view('home', ['games' => $new_games]);
    }

}
