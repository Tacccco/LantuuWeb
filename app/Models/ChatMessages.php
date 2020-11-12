<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\SendMessage;

class ChatMessages extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'message' => 'required|string',
        ]);

        $msg = $request->input('message');

        if (Auth::check()) {
            Event::fire(new SendMessage($msg));
        }

        return 0;
    }

}
