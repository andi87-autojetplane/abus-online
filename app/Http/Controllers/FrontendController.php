<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function hero_create(){
       // return view('frontend.components.hero_view');
    }

    public function frontend_contact()
    {
        return view('frontend.contact');
    }

    public function frontend_about()
    {
        return view('frontend.about');
    }

    public function frontend_hero_post(Request $request)
    {
        Hero::create([

        ]);
    }

}
