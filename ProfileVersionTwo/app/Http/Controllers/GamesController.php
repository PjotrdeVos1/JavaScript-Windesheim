<?php

namespace App\Http\Controllers;

use App\Models\games;
use Illuminate\Http\Request;


class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = games::all();
        return view('ttg.index', compact('games'));
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
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'Number_of_players' => 'required|integer',
            'Description' => 'required|string',
        ]);

        games::create($validate);

        return redirect()->route('games.index');

    }

    /**
     * Display the specified resource.
     */
public function show()
{
    $games = games::all();
    return view('ttg.index', compact('games'));
}

    /**
     * Show the form for editing the specified resource.
     */
public function edit(games $games)
{

}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, games $games)
{

}

    /**
     * Remove the specified resource from storage.
     */
public function destroy(games $games)
{

}
}
