<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function hero_create(){
        return view('frontend.components.hero_view');
    }

    public function frontend_contact()
    {
        return view('frontend.contact');
    }

    public function frontend_about()
    {
        return view('frontend.about');
    }

}
