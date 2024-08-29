<?php

namespace App\Http\Controllers;

use App\Models\SermonCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sermons () {
        $categories = SermonCategory::get();
        // dd($categories);
        return view('home.sermons', ['categories'=>$categories]);
    }
    
    public function events(){
        return view('home.events');
    }

    public function publications(){
        return view('home.publications');
    }
}
