<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Resources\TeamResource;

class TeamController extends Controller
{

    public function index()
    {
        return Team::all();
    }


    public function store(Request $request)
    {
        $team = new Team();
        $team->nom = $request->nom;
        $team->seu = $request->seu;
        $team->capita = $request->capita;
        $team->ciutat = $request->ciutat;
        $team->save();

        return $team->id;
    }

    public function show($id)
    {
        $team = Team::find($id);
        return $team;
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->nom = $request->nom;
        $team->seu = $request->seu;
        $team->capita = $request->capita;
        $team->ciutat = $request->ciutat;
        $team->save();
    }


    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
    }
}
