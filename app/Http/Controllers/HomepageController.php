<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomepageController extends Controller
{
    public function index() {
        return view('homepage');
    }
}
