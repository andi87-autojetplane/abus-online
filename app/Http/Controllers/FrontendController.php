<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function hero_create(){
        return view('frontend.components.hero_view');
    }

}
