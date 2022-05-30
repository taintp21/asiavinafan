<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\categories;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class productsController extends Controller
{
    public function index(){
        $data = products::all();
        return view('backend.products.index', compact('data'));
    }

    public function create(){
        $categories = categories::all();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request){
        $insert = $request->all();
        $products = new products();
        $products->cateId = $insert['cateId'];
        $products->name = str_replace(" ", "+", $insert['name']);

        $image_cloudinary = '';
        if($request->hasFile('images')){
            $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
            $products->images = $image_cloudinary;
        }
        if($image_cloudinary != '') $products->publicId_cloudinary = Cloudinary::getPublicId();

        $products->technical_specifications = $insert['technical_specifications'];
        $products->featured = $insert['featured'];

        if($request->has("switch_height")) $products->switch_height = 1;
        else $products->switch_height = 0;
        if($request->has("thermal_fuse_protection")) $products->thermal_fuse_protection = 1;
        else $products->thermal_fuse_protection = 0;

        $products->price = $insert['price'];

        $products->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    public function edit($id){
        $categories = categories::all();
        $data = products::find($id);
        return view('backend.products.edit', compact('categories' ,'data'));
    }

    public function update(Request $request, $id){
        $input = $request->all();

        $products = products::find($id);
        $products->cateId = $input['cateId'];
        $products->name = str_replace(" ", "+", $input['name']);

        $image_cloudinary = '';
        if($request->hasFile('images')){
            if($products->images == ''){
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $products->images = $image_cloudinary;
            }
            else{
                Cloudinary::uploadApi()->destroy($products->publicId_cloudinary, $options = []);
                $image_cloudinary = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
                $products->images = $image_cloudinary;
            }
        }
        if($image_cloudinary != '') $products->publicId_cloudinary = Cloudinary::getPublicId();

        $products->technical_specifications = $input['technical_specifications'];
        $products->featured = $input['featured'];
        if($request->has("switch_height")) $products->switch_height = 1;
        else $products->switch_height = 0;
        if($request->has("thermal_fuse_protection")) $products->thermal_fuse_protection = 1;
        else $products->thermal_fuse_protection = 0;

        $products->price = $input['price'];

        $products->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function destroy($id){
        $data = products::find($id);
        Cloudinary::uploadApi()->destroy($data->publicId_cloudinary, $options = []);
        products::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
