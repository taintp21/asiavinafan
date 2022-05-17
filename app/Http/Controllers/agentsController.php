<?php

namespace App\Http\Controllers;

use App\Models\agents;
use Illuminate\Http\Request;

class agentsController extends Controller
{
    public function index(){
        $data = agents::all();
        return view('backend.agents.index', compact('data'));
    }

    public function create(){
        return view('backend.agents.create');
    }

    public function store(Request $request){
        $insert = $request->all();
        $agents = new agents();
        $agents->name = $insert['name'];
        $agents->location = $insert['location'];
        $agents->phone = $insert['phone'];
        $agents->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    public function edit($id){
        $data = agents::find($id);
        return view('backend.agents.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $input = $request->all();

        $agents = agents::find($id);
        $agents->name = $input['name'];
        $agents->location = $input['location'];
        $agents->phone = $input['phone'];
        $agents->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        agents::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
