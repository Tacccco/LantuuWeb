<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\UserLoginLink;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function getConfirmAccount() {
        return view('userGetPassword');
    }

    public function postConfirmAccount(Request $request, $token) {
        
        $this->validate($request, [
            'password' => 'required| min:6| max:20 |confirmed',
            'password_confirmation' => 'required| min:6'
        ]);

        $ulink = UserLoginLink::where('link', $token)->first();
        $uData = $ulink->user()->first();

        $uData->password = bcrypt($request->password);
        $uData->save();

        return redirect('/login');
    }
}
