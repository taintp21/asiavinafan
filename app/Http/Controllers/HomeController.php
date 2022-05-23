<?php

namespace App\Http\Controllers;
use App\Models\agents;
use App\Models\sliders;
use App\Models\partners;
use App\Models\products;
use App\Models\categories;
use App\Models\promotions;
use App\Models\usage_tips;
use App\Models\send_contact;
use Illuminate\Http\Request;
use App\Models\product_registration;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $categories = categories::orderBy('id', 'desc')->get();
        $sliders = sliders::orderBy('id','desc')->get();
        return view('frontend.index', compact('categories', 'sliders'));
    }

    public function product_registration_store(Request $request){
        $request->validate([
            'product_type' => ['required'],
            'serial_number' => ['required'],
            'name' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required', 'regex:/((^(\+84|84|0|0084){1})(3|5|7|8|9))+([0-9]{8})$/'],
            'email' => ['required', 'email'],
            'buy_date' => ['required']
        ],
        [
            'product_type.required' => 'Product type must be filled',
            'serial_number.required' => 'Serial number must be filled',
            'name.required' => 'Your name must be filled',
            'address.required' => 'Your address must be filled',
            'phone_number.required' => 'Phone number must be filled',
            'phone_number.regex' => 'Wrong phone number format',
            'email.required' => 'Your email must be filled',
            'email.email' => 'Wrong email format',
            'buy_date.required' => 'Buy date must be filled',
        ]);
        $insert = $request->all();
        $product_registration = new product_registration();
        $product_registration->product_type = $insert['product_type'];
        $product_registration->serial_number = $insert['serial_number'];
        $product_registration->name = $insert['name'];
        $product_registration->address = $insert['address'];
        $product_registration->phone_number = $insert['phone_number'];
        $product_registration->email = $insert['email'];
        $product_registration->buy_date = $insert['buy_date'];
        $product_registration->save();
        return redirect()->back()->with('success', 'Your work has been saved');

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
        $random10Products = products::whereNotIn('id', [$product->id])->inRandomOrder()->take(10)->get();
        return view('frontend.product', compact('categories', 'cateName', 'product', 'slug', 'random10Products'));
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
        $where = promotions::where("sale","=","1")->orderBy("id","desc");
        $top_sale1 = $where->first();
        $top_sale2 = $where->skip(1)->take(1)->first();
        $top_sale3 = $where->skip(2)->take(1)->first();
        $top_sale4 = $where->skip(3)->take(1)->first();
        $promotions = promotions::orderBy("id","desc")->get();
        return view('frontend.promotion', compact('categories', 'promotions', "top_sale1", "top_sale2", "top_sale3", "top_sale4"));
    }

    public function one_promotion($slug){
        $categories = categories::all();
        $one_promotion = promotions::where("slug","=",$slug)->first();
        $random3Promotions = promotions::whereNotIn('id', [$one_promotion->id])->inRandomOrder()->take(3)->get();
        //Button
        $previous = promotions::where('id', '<', $one_promotion->id)->orderBy('id','desc')->first();
        $next = promotions::where('id', '>', $one_promotion->id)->orderBy('id')->first();
        return view('frontend.one_promotion', compact('categories', 'one_promotion', 'random3Promotions', 'previous', 'next'));
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

    public function send_contact(Request $request){
        $request->validate([
            'nameContact' => ['required'],
            'emailContact' => ['required', 'email'],
            'contentContact' => ['required', 'min:25']
        ],
        [
            'nameContact.required' => 'Your name must be filled',
            'emailContact.required' => 'Your email must be filled',
            'emailContact.email' => 'Wrong email format',
            'contentContact' => "Content must be filled",
            'contentContact.min' => 'At least 25 chars'
        ]);
        $insert = $request->all();
        $send_contact = new send_contact();
        $send_contact->nameContact = $insert['nameContact'];
        $send_contact->emailContact = $insert['emailContact'];
        $send_contact->contentContact = $insert['contentContact'];
        $send_contact->save();
        return redirect()->back()->with('success','success');
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

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
