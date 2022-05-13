<?php

namespace App\Http\Controllers;
use App\Models\agents;
use App\Models\sliders;
use App\Models\partners;
use App\Models\products;
use App\Models\categories;
use App\Models\usage_tips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $categories = categories::all();
        $sliders = sliders::all();
        return view('frontend.index', compact('categories', 'sliders'));
    }
    public function shop(){
        $categories = categories::all();
        return view('frontend.shop', compact('categories'));
    }

    public function product_category($slug){
        $categories = categories::all();
        $dataSlug = categories::select('id')->where('slug','LIKE',$slug)->first();
        $products = products::where('cateId','=',$dataSlug->id)->get();
        return view('frontend.product_category',compact('categories', 'products', 'slug'));
    }

    //1 Product
    public function product($slug){
        $categories = categories::all();
        $product = products::where('name','LIKE',$slug)->first();
        $cateName = categories::select('name')->where('id','=',$product->cateId)->first();
        return view('frontend.product', compact('categories', 'cateName', 'product', 'slug'));
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
}
