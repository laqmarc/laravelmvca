<?php

namespace App\Http\Controllers;
use App\Models\Club;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {

        $teams = DB::table('teams')
        ->join('clubs','clubs.id', '=', 'teams.id_club_in_teams')
        ->select('teams.*', 'clubs.name_club')
        ->get();
        
        print($teams);

        return view('team.index', compact('teams'));
    }

    public function create(Club $clubs)
    {
        $teams= Team::all();
        $clubs = Club::all();
 
        return view('team.create', compact('clubs')); 
    }

    public function create_team(Request $request){
        $request->validate([
            'name_team' => 'required',
            'id_club_in_teams' => 'required'
        ]);
        
        $teams = new Team();
        $teams->name_team = $request->name_team;
        $teams->id_club_in_teams = $request->id_club_in_teams;
        $teams->created_at = date('Y-m-d H:i:s');
        $teams->save();

        return redirect()->route('teams.index');
    }


    public function show($id)
    {
         return view('team.show',compact('teams'));        

    }


    public function edit($id, Club $clubs)
    {
        $team = Team::findOrFail($id);
        $clubs = Club::all();
        print($team);
        return view('team.edit', compact('team', 'clubs'));
    }
    


    public function store(Request $request){

        $request->validate([
            'name_team' => 'required',
            'id_club_in_teams' => 'required'
        ]);

        $team = new Team();
        $team->name_team = $request->name_team;
        $team->id_club_in_teams = $request->id_club_in_teams;
        $team->updated_at = date('Y-m-d H:i:s');
        $team->save();

        return redirect()->route('teams.index', $team->id);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name_team' => 'required',
            'id_club_in_teams' => 'required'
        ]);
        
        $team = Team::findOrFail($id);
        $team->name_team = $request->name_team;
        $team->id_club_in_teams = $request->id_club_in_teams;
        $team->updated_at = date('Y-m-d H:i:s');
        $team->save();

        return redirect()->route('teams.index', $team->id);
    }

    public function destroy(Team $teams){
        $teams->delete();
        
        return redirect('/teams');
    }

}
