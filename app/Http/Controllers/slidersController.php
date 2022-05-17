<?php

namespace App\Http\Controllers;

use App\Models\sliders;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class slidersController extends Controller
{
    public function index(){
        $data = sliders::all();
        return view('backend.sliders.index', compact('data'));
    }

    public function create(){
        return view('backend.sliders.create');
    }

    public function store(Request $request){
        $insert = $request->all();
        $sliders = new sliders();
        $image_cloudinary = '';
        if($request->hasFile('images')){
            $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
            $sliders->images = $image_cloudinary;
        }
        if($image_cloudinary != '') $sliders->publicId_cloudinary = Cloudinary::getPublicId();
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

        $image_cloudinary = '';
        if($request->hasFile('images')){
            if($sliders->images == ''){
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $sliders->images = $image_cloudinary;
            }
            else{
                Cloudinary::uploadApi()->destroy($sliders->publicId_cloudinary, $options = []);
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $sliders->images = $image_cloudinary;
            }
        }
        if($image_cloudinary != '') $sliders->publicId_cloudinary = Cloudinary::getPublicId();

        $sliders->title = $input['title'];
        $sliders->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        $data = sliders::find($id);
        Cloudinary::uploadApi()->destroy($data->publicId_cloudinary, $options = []);
        sliders::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
