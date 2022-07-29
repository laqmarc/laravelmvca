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



        $clubs = Club::all();
        $matchs = Mat::orderBy('id', 'desc')->paginate();
        $teams = Team::all();
        $matchs = Mat::join('teams','id_local_team_in_matchs','=','teams.id')
        ->join('teams as visitor_team','id_visitor_team_in_matchs','=','visitor_team.id')
        ->select('mats.id as id_match','mats.goals_local_team as goals_local_team',
        'mats.goals_visitor_team as goals_visitor_team','teams.name_team as local_team',
        'visitor_team.name_team as visitor_team')
        ->orderBy('id_match', 'asc')
        ->get();

        return view('match.index', compact('matchs'))->with('matchs', $matchs);

    }

    public function create(Team $teams)
    {
        $teams = Team::all();
        $clubs = Club::all();
        return view('match.create', compact('teams', 'clubs')); 
    }
   


    public function create_match(Request $request)
    {
        $request->validate([
            'id_local_team_in_matchs' => 'required',
            'id_visitor_team_in_matchs' => 'required',


        ]);

        $goals = rand(0,5);
        $goalsB = rand(0,5);

        $match = new Mat();
        $match->id_local_team_in_matchs = $request->id_local_team_in_matchs;
        $match->id_visitor_team_in_matchs = $request->id_visitor_team_in_matchs;
        $match->goals_local_team = $goals;
        $match->goals_visitor_team = $goalsB;
        $match->created_at = date('Y-m-d H:i:s');
        $match->save();
        
        return redirect()->route('matchs.index');
    }

    public function update(Request $request, Mat $match)
    {
        $request->validate([
            'id_local_team_in_matchs' => 'required',
            'id_visitor_team_in_matchs' => 'required',
            'goals_local_team' => 'required',
            'goals_visitor_team' => 'required'
        ]);

        $match = Mat::findOrFail($match->id);
        $match->id_local_team_in_matchs = $request->id_local_team_in_matchs;
        $match->id_visitor_team_in_matchs = $request->id_visitor_team_in_matchs;
        $match->goals_local_team = $request->goals_local_team;
        $match->goals_visitor_team = $request->goals_visitor_team;
        $match->save();

        return redirect()->route('matchs.index');
    }
   
   
    public function store(Request $request)
    {
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
        $match->updated_at = date('Y-m-d H:i:s');
        $match->save();

        return redirect()->route('matchs.index');
    }

   
    public function edit (Team $teams)
    {
        $teams = Team::all();
        $clubs = Club::all();
        return view('match.create', compact('teams', 'clubs')); 
    }

    public function destroy(Mat $matchs)
    {
        $matchs->delete();

        return redirect()->route('matchs.index');
    }
}
