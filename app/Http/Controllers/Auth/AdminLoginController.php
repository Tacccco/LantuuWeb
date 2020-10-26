<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AdminLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function showLoginForm() { 
        if (Session::has('auth')) {
            return redirect(route('admin.dashboard'));
        } else {
            return view('auth.adminLogin');
        }
    }

    public function login(Request $request) {

        $this->validate($request, [
            'login' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['login' => $request->login, 'password' => $request->password])) {
            Session::put('auth', $request->login);

            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back();
    }

    public function logout(Request $request) {
        Auth::guard()->logout();

        Session::forget('auth');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    public function logoutShow() {
        return redirect('/');
    }
} 
