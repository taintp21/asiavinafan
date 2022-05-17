<?php

namespace App\Http\Controllers;

use App\Models\partners;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class partnersController extends Controller
{
    public function index(){
        $data = partners::all();
        return view('backend.partners.index', compact('data'));
    }

    public function create(){
        return view('backend.partners.create');
    }

    public function store(Request $request){
        $partners = new partners();

        $image_cloudinary = '';
        if($request->hasFile('images')){
            $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
            $partners->images = $image_cloudinary;
        }
        if($image_cloudinary != '') $partners->publicId_cloudinary = Cloudinary::getPublicId();

        $partners->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    public function edit($id){
        $data = partners::find($id);
        return view('backend.partners.edit', compact('data'));
    }

    public function update(Request $request, $id){

        $partners = partners::find($id);

        $image_cloudinary = '';
        if($request->hasFile('images')){
            if($partners->images == ''){
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $partners->images = $image_cloudinary;
            }
            else{
                Cloudinary::uploadApi()->destroy($partners->publicId_cloudinary, $options = []);
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $partners->images = $image_cloudinary;
            }
        }
        if($image_cloudinary != '') $partners->publicId_cloudinary = Cloudinary::getPublicId();

        $partners->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        $data = partners::find($id);
        Cloudinary::uploadApi()->destroy($data->publicId_cloudinary, $options = []);
        partners::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
