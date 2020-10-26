<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class HomepageController extends Controller
{
    public function index() {
        if (Session::has('auth')) {
            return redirect(route('admin.dashboard'));
        }

        return view('homepage');
    }
}
