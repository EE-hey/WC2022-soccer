<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerController extends Controller
{
    
    public function showAllPlayers()
    {
        $results = app('db')->select("SELECT * FROM players");
        return response()->json($results);
    }


    public function showPlayersConsideringPosition($position)
    {
        return response()->json(
            DB::table('players')
                ->where('position' ,'=', $position)
                ->get()
        );
    }

    public function showPlayersConsideringCountry($country)
    {
        return response()->json(
            DB::table('players')
                ->where('country','=',$country)
                ->get()
        );


    }

    public function showPlayersConsideringCountryTest($country)
    {
        return response()->json(
            DB::table('players')
                ->where('country','=',$country)
                ->get()
        );
    }

}