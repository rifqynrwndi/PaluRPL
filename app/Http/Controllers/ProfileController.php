<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function index()
    {
        return view('dashboard.profile.index');
    }

    public function changepassword(Request $request)
    {
        $request->validate([
            'passwordsekarang' => ['required', 'min:8'],
            'passwordbaru' => ['required', 'min:8'],
        ],
        [
            'passwordsekarang.min' => 'Password sekarang minimal 8 karakter',
            'passwordbaru.min' => 'Password baru minimal 8 karakter',
        ]);

        if(!Hash::check($request->passwordsekarang, auth()->user()->password)){
            return redirect()->route('profile.index')->with("info", "Password sekarang salah");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->passwordbaru)
        ]);

        return redirect()->route('profile.index')->with("success", "Password telah diubah");
    }

    public function changeavatar(Request $request)
    {

        $request->validate([
            'avatar' => ['required', 'mimes:png,jpg,jpeg,heic'],
        ],
        [
            'avatar.mimes' => 'Format file harus berupa png, jpg, heic atau jpeg'
        ]);

        $user = User::find(Auth::user()->id);
        $date = date('Ymd His gis');

        if($request->hasFile('avatar')){
            $request->file('avatar')->move('admin/demo/app/images/', $date.$request->file('avatar')->getClientOriginalName());
            $user->avatar = $date.$request->file('avatar')->getClientOriginalName();
            $user->save();

            return redirect()->back()->with('success', 'Gambar Profil telah diubah');
        }

        return redirect()->back()->with('info', 'Gambar Profil gagal diubah');
    }
}
