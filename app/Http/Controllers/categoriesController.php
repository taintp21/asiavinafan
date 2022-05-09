<?php

namespace App\Http\Controllers;

use cloudinary;
use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index(){
        $data = categories::all();
        return view('backend.categories.index', compact('data'));
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
        $response = cloudinary()->upload($request->file('images')->getRealPath())->getSecurePath();
        $categories->images = $response;
        $categories->save();
        return redirect()->back()->with('message', 'Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
