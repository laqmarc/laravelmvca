<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Club;


class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all();
        return view('club.index')->with('clubs',$clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('club.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clubs = new Club();
        $clubs->name = $request->get('name');
        $clubs->save();
        return redirect('/clubs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = Club::find($id);
        return view('club.edit')->with('club',$club);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $club = Club::find($id);

        $club->name = $request->get('name');
        $club->save();

        return redirect('/clubs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);
        $club->delete();
        return redirect('/clubs');
    }

//     public function getNumberClubs($numberclubs)
//     {
//     $numberclubs = DB::table('clubs')->count();
//             return view('.index')->with('club',$numberclubs);

            
//     }

//     public function counter($id)                                                    
// {                                              
//     $count = Club::where('id',$id)->count();
//    $count = DB::select('select count(*) as total from clubs');
//    return view('.index', ['count' => $count[0]->total]);
                     
// }    
}
