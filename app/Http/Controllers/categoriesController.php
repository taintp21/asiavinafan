<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class categoriesController extends Controller
{
    public function index(){
        $data = categories::all();
        return view('backend.categories.index', compact('data'));
    }

    public function create(){
        return view('backend.categories.create');
    }

    public function store(Request $request){
        $insert = $request->all();
        $categories = new categories();
        $categories->name = $insert['name'];
        $categories->slug = $insert['slug'];
        $image_cloudinary = '';
        if($request->hasFile('images')){
            $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
            $categories->images = $image_cloudinary;
        }
        if($image_cloudinary != '') $categories->publicId_cloudinary = Cloudinary::getPublicId();
        $categories->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    public function edit($id){
        $data = categories::find($id);
        return view('backend.categories.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $input = $request->all();

        $categories = categories::find($id);
        $categories->name = $input['name'];
        $categories->slug = $input['slug'];
        $image_cloudinary = '';
        if($request->hasFile('images')){
            if($categories->images == ''){
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $categories->images = $image_cloudinary;
            }
            else{
                Cloudinary::uploadApi()->destroy($categories->publicId_cloudinary, $options = []);
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $categories->images = $image_cloudinary;
            }
        }
        if($image_cloudinary != '') $categories->publicId_cloudinary = Cloudinary::getPublicId();
        $categories->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        $data = categories::find($id);
        Cloudinary::uploadApi()->destroy($data->publicId_cloudinary, $options = []);
        categories::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
