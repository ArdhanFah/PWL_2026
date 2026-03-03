<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";    
    }

    public function about(){
        return "Nama: Ardhan Dikri Achmad Fahrudin<br> 
        NIM: 244107020012";
    }
    
    public function articles($id){
        return "Artikel dengan ID " . $id;
    }
}
