<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Mat;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MatController extends Controller
{
    public function index()
    {

        // $matchs = Mat::join('teams','id_local_team_in_matchs','=','teams.id')
        // ->join('teams as id_visitor_team_in_matchs','id_visitor_team_in_matchs', '=', 'teams.id')
        // ->select(
        //     'teams.name_team as local_team',
        //     'teams.name_team as visitor_team',
       
        // )
        // ->get();



        $clubs = Club::all();
        $matchs = Mat::all();
        $teams = Team::all();
        // $matchs = DB::table('mats')
        // ->join('teams','teams.id', '=', 'mats.id_local_team_in_matchs')
        // ->join('teams','teams.id', '=', 'mats.id_visitor_team_in_matchs')
        // ->select('mats.*', 'teams.name_team', 'teams.name_team')
        // ->get();
        // $teams = DB::table('teams')
        // ->join('clubs','clubs.id', '=', 'teams.id_club_in_teams')
        // ->select('teams.*', 'clubs.name_club')
        // ->get();



        print($matchs);
        return view('match.index', compact('matchs'))->with('matchs', $matchs);

    }


    public function create()
    {
        
        $teams = Team::all();
        return view('match.create', compact("teams"));
    }
   
    public function create_match(Request $request){
        $request->validate([
            'id_local_team_in_matchs' => 'required',
            'id_visitor_team_in_matchs' => 'required',
            'goals_local_team' => 'required',
            'goals_visitor_team' => 'required'
        ]);
        
        $match = new Mat();
        $match->id_local_team_in_matchs = $request->id_local_team_in_matchs;
        $match->id_visitor_team_in_matchs = $request->id_visitor_team_in_matchs;
        $match->goals_local_team = $request->goals_local_team;
        $match->goals_visitor_team = $request->goals_visitor_team;
        $match->created_at = date('Y-m-d H:i:s');
        $match->save();
        
        return redirect()->route('match.index');
    }

    // public function edit(Mat $match)
    // {
    //     $teams = Team::all();
    //     $Mats = Mat::all();

    //     return view('matchs.edit', compact("match"), compact("Mats"), compact("teams"));
    // }
   
   
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'id_local_team_in_matchs'=>'required',
    //         'id_visitor_team_in_matchs'=>'required|different:id_local_team_in_matchs',
    //     ]);
    //     $match = new Mat();
    //     $match->id_local_team_in_matchs = $request->id_local_team_in_matchs;
    //     $match->id_visitor_team_in_matchs = $request->id_visitor_team_in_matchs;
    //     $match->goals_local_team = $request->goals_local_team;
    //     $match->goals_visitor_team = $request->goals_visitor_team;
    //     $match->save();

    //     return redirect()->route('home');
    // }

    // public function update(Request $request, Mat $match)
    // {
    //     $request->validate([
    //         'id_local_team_in_matchs'=>'required',
    //         'id_visitor_team_in_matchs'=>'required|different:id_local_team_in_matchs',
    //     ]);

    //     $match->id_local_team_in_matchs = $request->id_local_team_in_matchs;
    //     $match->id_visitor_team_in_matchs = $request->id_visitor_team_in_matchs;
    //     $match->goals_local_team = $request->goals_local_team;
    //     $match->goals_visitor_team = $request->goals_visitor_team;
    //     $match->save();

    //     return redirect()->route('home');
    // }

    public function destroy(Mat $match)
    {
        $match->delete();

        return redirect()->route('match.index');
    }
}
