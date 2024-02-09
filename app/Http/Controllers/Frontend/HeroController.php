<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Image;

class HeroController extends Controller
{
    public function index()
    {
        $heros = Hero::all();

        return view('frontend.components.hero_view', compact('heros'));
    }

    public function storeHero(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slide-picture' => 'required',
        ]);

        if ($request->file('slide-picture')) {
            $file = $request->file('slide-picture');
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(1920, 1152)->save('frontend/assets/img/slide/' . $filename);
            // $save_url = 'frontend/assets/img/slide'.$filename;
            Hero::create([
                'title' => $request->title,
                'description' => $request->description,
                'hero_image' => $filename,
            ]);

            $notification = array(
                'message' => 'Hero berhasil dibuat dengan gambar',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
        } else {
            Hero::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => 'Hero berhasil dibuat tanpa gambar',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
        }
    }

    public function hero_edit(Hero $heroid)
    {
        $hero_id = $heroid->id;
        $herofind = Hero::find($hero_id);
        return view('frontend.hero.edit',compact('herofind'));
    }

    public function hero_update(Request $request)
    {
        $HeroId = $request->id;

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'slide-picture' => 'required',
        ]);

        if ($request->file('slide-picture')) {
            $file = $request->file('slide-picture');
            $filename = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(1920, 1152)->save('frontend/assets/img/slide/' . $filename);
            Hero::findOrFail($HeroId)->update([
                'title' => $request->title,
                'description' => $request->description,
                'hero_image' => $filename,
            ]);

            $notification = array(
                'message' => 'Hero berhasil dibuat dengan gambar',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
        } else {
            Hero::findOrFail($HeroId)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            $notification = array(
                'message' => 'Hero berhasil dibuat tanpa gambar',
                'alert-type' => 'success',
            );

            return redirect()->back()->with($notification);
        }
    }
}
