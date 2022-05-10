<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('backend.login');
    }

    public function submit(Request $request)
    {

        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!$request->get('email') || !$request->get('password')) {
            return redirect()->back();
        }

        try {
            $admin = admin::where('email', $request->email)->first();
            if ($admin) {
                if (Hash::check($request->password, $admin->password)) {
                    Auth::guard('admin')->login($admin);
                    return redirect()->route('admin.dashboard');
                }
                return redirect()->back();

            } else {
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');

    }
}
