<?php

namespace App\Http\Controllers;

use App\Models\clubs;
use App\Models\membership;
use App\Models\Users;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function index()
    {
        $clubs=response()->json(clubs::all());
        return $clubs;
    }
    public function show($id)
    {
        $clubs=response()->json(clubs::find($id));
        return $clubs;
    }
    public function destroy($id)
    {
        clubs::find($id)->delete();
    }
    public function store(Request $request)
    {
        $clubs=new clubs;
        $clubs->establishment=$request->tilte;
        $clubs->location=$request->tilte;
        $clubs->max_number=$request->tilte;
        $clubs->save();
    }
    public function update(Request $request,$id)
    {
        $clubs=clubs::find($id);
        $clubs->establishment=$request->tilte;
        $clubs->location=$request->tilte;
        $clubs->max_number=$request->tilte;
        $clubs->save();
    }
    public function newView()
    {
        $clubs=clubs::all();
        return view('clubs.new',['clubs'=>$clubs]);
    }
    public function editView($id)
    {
        $clubs=clubs::find($id);
        return view('clubs.edit',['clubs'=>$clubs]);
    }
    public function listView()
    {
        $clubs=clubs::all();
        return view('clubs.list',['clubs'=>$clubs]);
    }
}
