<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Models\Game;
use Illuminate\Http\Request;

#[AllowDynamicProperties] class GameController extends Controller
{


    public function __construct(Game $game)
    {
        $this->games = $game;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = $this->games->all();

        return view('System.Games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
