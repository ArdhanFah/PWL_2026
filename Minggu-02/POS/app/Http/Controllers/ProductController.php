<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food_baverage()
    {
        return view('category.food-baverage');
    }

    public function beauty_health()
    {
        return view('category.beauty-health');
    }

    public function home_care()
    {
        return view('category.home-care');
    }

    public function baby_kid()
    {
        return view('category.baby-kid');
    }
}
