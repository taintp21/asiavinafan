<?php

namespace App\Http\Controllers;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('backend.index');

    }
}
