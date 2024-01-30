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
            'users' => $users]);
    }

}
