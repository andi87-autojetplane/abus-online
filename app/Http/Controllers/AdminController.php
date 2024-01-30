<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message'       => 'Berhasil keluar dari aplikasi.',
            'alert-type'    => 'success',
        );

        return redirect('login')->with($notification);
    }

    public function admin_profile_index()
    {
        $users = User::all();

        return view('admin.profile.index', [
            'users' => $users,
            'jumUser'=> $users->count(),
            'jumUserinActive' => $users->where('is_active','0')->count(),
            'jumUserActive' => $users->where('is_active','1')->count(),
            'jumUserBanned' => $users->where('banned_until','!=','')->count(),
            'jumUserEmailVerified' => $users->where('email_verified_at','!=','')->count(),
         ]);
    }

    public function admin_profile_show()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('admin.profile.show', compact('userData'));
    }

}
