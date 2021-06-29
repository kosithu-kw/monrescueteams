<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Rescueteam;

class ApiController extends Controller
{
    public function getTownships(){
        $cities=City::get();
        return response()->json(['cities'=>$cities]);
    }
    public function getRescueTeams($id){
        $city=City::whereId($id)->first();
        $teams=Rescueteam::where('city_id', $id)->OrderBy('city_id', 'desc')->get();
        return response()->json(['township'=>$city, 'RescueTeams'=>$teams]);
    }
}
