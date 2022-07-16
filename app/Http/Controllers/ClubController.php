<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;


class ClubController extends Controller
{

    public function index()
    {
        $clubs = Club::all();
        // var_dump($clubs);
        return view('club.index')->with('clubs',$clubs);

    }

    public function create()
    {
        return view('club.create');
    }

    public function store(Request $request)
    {
        $clubs = new Club();
        $clubs->name_club = $request->get('name_club');
        $clubs->created_at = date('Y-m-d H:i:s');
        $clubs->save();
        return redirect('/clubs');
    }

    public function edit($id)
    {
        $club = Club::find($id);
        $club->updated_at = date('Y-m-d H:i:s');
                 var_dump($club);

        return view('club.edit')->with('club',$club);

    }

    public function update(Request $request, $id)
    {
        $club = Club::find($id);

        $club->name_club = $request->get('name_club');
        $club->updated_at = date('Y-m-d H:i:s');
        $club->save();

        return redirect('/clubs');
    }

    public function destroy($id)
    {
        $club = Club::find($id);
        $club->delete();
        return redirect('/clubs');
    }
   
}
