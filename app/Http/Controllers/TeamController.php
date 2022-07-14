<?php

namespace App\Http\Controllers;
use App\Models\Club;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderby('id', 'desc')->paginate();
        
        
        $clubs = Team::join('clubs','teams.club_id','=','clubs.id')
        ->select('teams.id as current_club_id','teams.name as name','clubs.name as name')
        ->distinct()
        ->get();

        return view('team.index', compact('teams', 'clubs'))
        ->with('clubs', $clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Club $clubs)
    {
        $teams= Team::all();
        $clubs = Club::all();
        
        // echo 'clubs';
        // dd($clubs);
        // echo 'teams';
        // dd($teams);

        return view('team.create', compact('clubs')); 
    }


    public function create_teams(Request $request){
        $request->validate([
            'name' => 'required',
            'club_id' => 'required'
        ]);
        
        $teams = new Team();
        $teams->name = $request->name;
        $teams->club_id = $request->club_id;
        $teams->save();

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('teams.show',compact('teams'));        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Team $teams)
    {  
        $clubs= Club::all();    
        return view('teams.edit', compact('teams','clubs'));
    }

    public function store(Request $request){
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'club_id' => 'required'
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->club_id = $request->club_id;
        $team->save();
        return redirect()->route('teams.index', $team->id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Team $teams)
    {
        $request->validate([
            'name' => 'required|unique:teams,name|max:50',
            'club' => 'required'
        ]);
        
        $teams->club_id = $request->club;
        $teams->name = $request->name;        
        $teams->save();

        return redirect()->route('team.index', $teams);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        
        return redirect('/teams');
    }

}
