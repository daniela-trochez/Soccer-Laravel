<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Goal;
use App\Models\Player;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::with('player','game')->get();
        return view('goals.index',compact('goals'));
    }


    public function create() //formulario
    {
        $players= Player::all();
        $games= Game::all();
        return view('goals.create', compact('players','games'));
    }


    public function store(Request $request)
    {
        Goal::create($request->all());
        return redirect()->route('goals.index');
    }


    public function show(Goal $goal)
    {

        return view('goals.show',compact('goal'));
    }


    public function edit(Goal $goal)
    {
        $players = Player::all();
        $games= Game::all();
        return view('goals.edit',compact('players','games','goal'));
    }


    public function update(Request $request, Goal $goal)
    {
        $goal->update($request->all());
        return redirect()->route('goals.show');
    }


    public function destroy(Goal $goal)
    {
        $goal->delete();
        return redirect()->route('goals.index');
    }
}
