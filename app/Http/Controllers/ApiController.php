<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Rescueteam;

class ApiController extends Controller
{
    public function getCities(){
        $cities=City::get();
        return response()->json(['cities'=>$cities]);
    }
    public function getRescueTeams(){
        $teams=Rescueteam::with('city')->OrderBy('city_id', 'desc')->get();
        return response()->json(['RescueTeams'=>$teams]);
    }
}
