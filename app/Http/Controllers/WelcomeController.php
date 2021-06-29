<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Rescueteam;

class WelcomeController extends Controller
{
    public function getWelcome(){
       
        return view('welcome');

    }
    public function getTownships(){
        $cities=City::get();
        return view('townships')->with(['cities'=>$cities]);
    }
    public function getTeamsList($id){
        $teams=Rescueteam::where('city_id', $id)->get();
        $city=City::whereId($id)->firstOrFail();
        return view('city-teams')->with(['teams'=>$teams,'city'=>$city]);
    }
}
