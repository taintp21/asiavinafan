<?php

namespace App\Http\Controllers;

use App\Models\agents;
use App\Models\slider;
use App\Models\partners;
use App\Models\products;
use App\Models\categories;
use App\Models\usage_tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = categories::all();
        $slider = slider::all();
        return view('frontend.index', compact('categories', 'slider'));
    }

    public function shop(){
        $categories = categories::all();
        return view('frontend.shop', compact('categories'));
    }

    public function product_category(){
        $categories = categories::all();
        $title = DB::table('categories')->join('products', 'products.cateId','=','categories.id')->select('categories.name')->get();
        $products = products::all();
        return view('frontend.product_category',compact('categories', 'title', 'products'));
    }

    //1 Product
    public function product(){

    }

    public function agents(){
        $data = agents::all();
        $categories = categories::all();
        $partners = partners::all();
        return view('frontend.agents', compact('data', 'categories', 'partners'));
    }

    //Customer Service
    public function customer_service(){
        $categories = categories::all();
        return view('frontend.customer_service', compact('categories'));
    }

    public function warranty_policy(){
        $categories = categories::all();
        return view('frontend.warranty_policy', compact('categories'));
    }

    public function exchange_policy(){
        $categories = categories::all();
        return view('frontend.exchange_policy', compact('categories'));
    }

    public function usage_tips(){
        $data = usage_tips::all();
        $categories = categories::all();
        return view('frontend.usage_tips', compact('data', 'categories'));
    }

    //Promotion
    public function promotion(){
        $categories = categories::all();
        return view('frontend.promotion', compact('categories'));
    }

    //About us
    public function about_us(){
        $categories = categories::all();
        return view('frontend.about_us', compact('categories'));
    }

    //Contact Us
    public function contact_us(){
        $categories = categories::all();
        return view('frontend.contact_us', compact('categories'));
    }

    //Search
    public function search(Request $request){
        $categories = categories::all();
        // Get the search value from the request
        $search = $request->input('s');
        // Search in the title and body columns from the posts table
        $products = products::query()->where('name', 'LIKE', "%{$search}%")->get();
        // Return the search view with the resluts compacted
        return view('frontend.search_result', compact('categories', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
