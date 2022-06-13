<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Http\Resources\PlayerResource;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with(['team', 'category'])->get();
        return response()->json(PlayerResource::collection($players));
    }

    public function store(Request $request)
    {
        $player = new Player();
        $player->nom = $request->nom;
        $player->cognoms = $request->cognoms;
        $player->ciutat = $request->ciutat;
        $player->tel = $request->tel;
        $player->email = $request->email;
        $player->equip_id = $request->equip_id;
        $player->categoria_id = $request->categoria_id;
        $player->save();
        //Player::create($request->all());
    }

    public function show($id)
    {
        $player = Player::find($id);
        return $player;
    }


    public function update(Request $request, $id)
    {
        $player = Player::find($id);
        $player->nom = $request->nom;
        $player->cognoms = $request->cognoms;
        $player->tel = $request->tel;
        $player->email = $request->email;
        $player->ciutat = $request->ciutat;
        $player->equip_id = $request->equip_id;
        $player->categoria_id = $request->categoria_id;
        $player->save();
    }

    public function destroy(Player $player)
    {
        $player = Player::find($player);
        $player->delete();
    }
}
