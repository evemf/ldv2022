<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamCapitan;
use App\Http\Resources\TeamCapitanResource;


class TeamCapitanController extends Controller
{
    public function index()
    {
        $teamCapitan = TeamCapitan::with(['capitan', 'team'])->get();
        return response()->json(TeamCapitanResource::collection($teamCapitan));
    }


    public function store(Request $request)
    {
        $teamCapitan = new TeamCapitan();
        $teamCapitan->equip_id = $request->equip_id;
        $teamCapitan->capita_id = $request->capita_id;
        $teamCapitan->save();
    }

    public function show($id)
    {
        $teamCapitan = TeamCapitan::find($id);
        return $teamCapitan;
    }

  
    public function update(Request $request, $id)
    {
        $teamCapitan = TeamCapitan::find($id);
        $teamCapitan->equip_id = $request->equip_id;
        $teamCapitan->capita_id = $request->capita_id;
        $teamCapitan->save();
    }

    public function destroy(TeamCapitan $teamCapitan)
    {
        $teamCapitan = TeamCapitan::find($teamCapitan);
        $teamCapitan->delete();
    }
}
