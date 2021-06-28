<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Rescueteam;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getCities(){
        $cities=City::OrderBy('created_at', 'desc')->get();
        return view ('cities')->with(['cities'=>$cities]);
    }
    public function postAddCity(Request $request){
        $this->validate($request,[
            'city_name'=>'required|unique:cities'
        ]);
        $c=new City();
        $c->city_name=$request['city_name'];
        $c->save();
        return redirect()->back();
    }
    public function getDeleteCity($id){
        $c=City::whereId($id)->firstOrFail();
        $c->delete();
        return redirect()->back();
    }
    public function postUpdateCity(Request $request){
        $id=$request['id'];
        $city_name=$request['city_name'];
        $c=City::whereId($id)->firstOrFail();
        $c->city_name=$city_name;
        $c->update();
        return redirect()->back();
    }
    public function getRescueTeams(){
        $cities=City::get();
        $teams=Rescueteam::OrderBy("id", "desc")->paginate("10");
        return view ('rescue-teams')->with(['cities'=>$cities, 'teams'=>$teams]);
    }
    public function getSearchTeam(Request $request){
        $team_name=$request['team_name'];
        $cities=City::get();
        $teams=Rescueteam::where('team_name', "LIKE", "%$team_name%")
        ->OrderBy("id", "desc")->paginate("10");
        return view ('rescue-teams')->with(['cities'=>$cities, 'teams'=>$teams]);

    }
    public function postAddTeam(Request $request){
        $this->validate($request,[
            'city_id'=>'required',
            'team_name'=>'required|unique:rescueteams'
        ]);
        $r=new Rescueteam();
        $r->city_id=$request['city_id'];
        $r->team_name=$request['team_name'];
        $r->phone_one=$request['phone_one'];
        $r->phone_two=$request['phone_two'];
        $r->phone_three=$request['phone_three'];
        $r->phone_four=$request['phone_four'];
        $r->phone_five=$request['phone_five'];
        $r->phone_six=$request['phone_six'];
        $r->phone_seven=$request['phone_seven'];
        $r->phone_eight=$request['phone_eight'];
        $r->save();
        return redirect()->back();
      
    }
    public function getDeleteTeam($id){
        $team=Rescueteam::whereid($id)->firstOrFail();
        $team->delete();
        return redirect()->back();
    }
    public function postUpdateTeam(Request $request){
        $id=$request['id'];
        $r=Rescueteam::whereId($id)->firstOrFail();
        $r->city_id=$request['city_id'];
        $r->team_name=$request['team_name'];
        $r->phone_one=$request['phone_one'];
        $r->phone_two=$request['phone_two'];
        $r->phone_three=$request['phone_three'];
        $r->phone_four=$request['phone_four'];
        $r->phone_five=$request['phone_five'];
        $r->phone_six=$request['phone_six'];
        $r->phone_seven=$request['phone_seven'];
        $r->phone_eight=$request['phone_eight'];
        $r->update();
        return redirect()->back();
    }
}
