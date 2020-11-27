<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Events\SendMessage;
use Event;
use App\Models\ChatMessages;

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
            //Event::dispatch(new SendMessage($msg));
            broadcast(new SendMessage($msg))->toOthers();
        }

        $db = new ChatMessages;

        $db->message = $msg;
        $db->user_id = Auth::user()->id;
        $db->save();

        return $msg;
    }
}
