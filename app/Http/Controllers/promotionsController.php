<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\promotions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class promotionsController extends Controller
{
    public function index(){
        $data = promotions::all();
        return view("backend.promotions.index", compact('data'));
    }

    public function create(){
        return view("backend.promotions.create");
    }

    public function store(Request $request){
        $insert = $request->all();
        $promotions = new promotions();
        $promotions->title = $insert['title'];
        $promotions->slug = $insert['slug'];
        $promotions->short_content = $insert['short_content'];
        $image_cloudinary = '';
        if($request->hasFile('image')){
            $image_cloudinary = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $promotions->image = $image_cloudinary;
        }
        if($image_cloudinary != '') $promotions->publicId_cloudinary = Cloudinary::getPublicId();
        $promotions->content = $insert['content'];
        if($request->has("sale")) $promotions->sale = 1;
        else $promotions->sale = 0;
        $promotions->userId = Auth::user()->id;
        $promotions->created_at = Carbon::now();
        $promotions->updated_at = Carbon::now();
        $promotions->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    public function edit($id){
        $data = promotions::find($id);
        return view("backend.promotions.edit", compact('data'));
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $promotions = promotions::find($id);
        $promotions->title = $input['title'];
        $promotions->slug = $input['slug'];
        $promotions->short_content = $input['short_content'];
        $image_cloudinary = '';
        if($request->hasFile('image')){
            if($promotions->image == ''){
                $image_cloudinary = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
                $promotions->image = $image_cloudinary;
            }
            else{
                Cloudinary::uploadApi()->destroy($promotions->publicId_cloudinary, $options = []);
                $image_cloudinary = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
                $promotions->image = $image_cloudinary;
            }
        }
        if($image_cloudinary != '') $promotions->publicId_cloudinary = Cloudinary::getPublicId();
        $promotions->content = $input['content'];
        if($request->has("sale")) $promotions->sale = 1;
        else $promotions->sale = 0;
        $promotions->userId = Auth::user()->id;
        $promotions->created_at = $promotions->created_at;
        $promotions->updated_at = Carbon::now();
        $promotions->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        $data = promotions::find($id);
        Cloudinary::uploadApi()->destroy($data->publicId_cloudinary, $options = []);
        promotions::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
