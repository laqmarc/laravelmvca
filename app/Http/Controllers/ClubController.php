<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;


class ClubController extends Controller
{

    public function index()
    {
        $clubs = Club::all();

        return view('club.index')->with('clubs',$clubs);

    }

    public function create()
    {
        return view('club.create');
    }



    public function create_club(Request $request){
        $request->validate([
            'name_club' => 'required',
            
        ]);
        
        $club = new Club();
       
        $club->name_club= $request->name_club;
        $club->save();

        return redirect()->route('clubs.index');
    }



    public function store(Request $request)
    {
        $clubs = new Club();
        $clubs->name_club = $request->get('name_club');
        $clubs->created_at = date('Y-m-d H:i:s');
        $clubs->updated_at = date('Y-m-d H:i:s');
        $clubs->save();

        return redirect('/clubs');
    }

    public function edit($id)
    {
        $club = Club::findOrFail($id);

        return view('club.edit')->with('club',$club);

    }

    public function update(Request $request, $id)
    {
        $club = Club::findOrFail($id);

        $club->name_club = $request->get('name_club');
        
        $club->save();

        return redirect('/clubs');
    }

    public function destroy($id)
    {
        $club = Club::findOrFail($id);
        $club->delete();
        
        return redirect('/clubs');
    }
   
}
