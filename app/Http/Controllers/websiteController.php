<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function homePage(Request $req){
        return view("website.index");
    } //homepage
}
