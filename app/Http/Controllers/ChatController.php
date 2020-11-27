<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Events\SendMessage;
use Event;

class ChatController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user.chat');
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'message' => 'required|string',
        ]);

        $msg = $request->input('message');

        if (Auth::check()) {
            Event::dispatch(new SendMessage($msg));
        }

        return $msg;
    }
}
