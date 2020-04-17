<?php

namespace App\Http\Controllers;

use App\review;
use App\Game;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Game $game)
    {
        return view('reviews.create', ['game' => $game]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Review::create($request->all());
        Review::create($this->validateReview());

        return redirect(route('games.show',[ 'game'=>request('game_id')]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game, review $review)
    {

        return view('reviews.edit', ['game' => $game], ['review' => $review]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, review $review)
    {
        $review->update($this->validateReview());
        // $review->category()->sync((array)$request->input('category'));

        return redirect(route('games.show', request('game_id')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review)
    {
        $review->delete($review);

        return redirect(route('games.show',[ 'game'=>request('game_id')]));
    }

    protected function validateReview()
    {
        return request()->validate([
            'body' => 'required',
            'game_id' => 'required',
            'user_id' => 'required'
        ]);
    }

}
