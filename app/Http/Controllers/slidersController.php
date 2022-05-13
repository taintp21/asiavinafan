<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class slidersController extends Controller
{
    public function index(){
        $data = sliders::all();
        $count = count($data);
        return view('backend.sliders.index', compact('data', 'count'));
    }

    public function create(){
        return view('backend.sliders.create');
    }

    public function store(Request $request){
        $insert = $request->all();
        $sliders = new sliders();
        if($request->hasFile('images')){
            $sliders->images = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
        }
        $sliders->title = $insert['title'];
        $sliders->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    public function edit($id){
        $data = sliders::find($id);
        return view('backend.sliders.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $input = $request->all();

        $sliders = sliders::find($id);
        if($request->hasFile('images')){
            $sliders->images = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
        }
        $sliders->title = $input['title'];
        $sliders->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        sliders::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
