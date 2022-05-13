<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class categoriesController extends Controller
{
    public function index(){
        $data = categories::all();
        $count = count($data);
        return view('backend.categories.index', compact('data', 'count'));
    }
    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $insert = $request->all();
        $categories = new categories();
        $categories->name = $insert['name'];
        $categories->slug = $insert['slug'];
        if($request->hasFile('images')){
            $categories->images = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
        }
        $categories->save();
        return redirect()->back()->with('success', 'Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = categories::find($id);
        return view('backend.categories.edit', compact('data'));
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
        $input = $request->all();

        $categories = categories::find($id);
        $categories->name = $input['name'];
        $categories->slug = $input['slug'];
        if($request->hasFile('images')){
            $categories->images = Cloudinary::upload($request->file('images')->getRealPath())->getSecurePath();
        }
        $categories->update();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categories::destroy($id);
        return back()->with("success", "Deleted Successfully!");
    }
}
