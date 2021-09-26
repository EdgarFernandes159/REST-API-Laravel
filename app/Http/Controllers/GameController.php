<?php

namespace App\Http\Controllers;

use App\Game;
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
        try {
            return response()->json([
                'data' => Game::with('genres', 'platforms')->get(),
                'message' => 'Success'
            ],200);
        }catch (\Exception $exception){
            return response()->json(['error' => $exception], 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = new Game();
        $game->title        = $request->title;
        $game->released     = $request->released;
        $game->director     = $request->director;
        $game->critic_score = $request->critic_score;
        $game->user_score   = $request->user_score;
        $game->save();

        $game->genres()->sync($request->genres);
        $game->platforms()->sync($request->platforms);

        return response()->json($game->load('genres', 'platforms'), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        try {
            return response()->json($game->load('genres', 'platforms'),200);
        }catch (Exception $exception){
            return response()->json(['error'=> $exception],500);
        }
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
        try{
            $game->update($request->all());
            $game->genres()->sync($request->input('genres'));
            $game->platforms()->sync($request->input('platforms'));

            return response()->json([
                'data' => $game,
                'message' => 'Success'
            ],201);

        }catch (Exception $exception){
            return response()->json(['error'=> $exception], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        try {
            $game->delete();
            return response()->json(['message' => 'Deleted'], 205);
        } catch (Exception $exception) {
            return response()->json(['error' => $exception], 500);
        }
    }
}
