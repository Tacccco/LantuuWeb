<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index() {
        //$flag = TRUE;
        //if ($flag == TRUE) {
        //    return view('home');
        //} else {
            return view('main');
        //}
    }
}
