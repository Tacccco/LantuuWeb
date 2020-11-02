@extends('layouts.app')

@section('content')
    <div>
        {!! Form::open(['action' => ['\App\Http\Controllers\UserController@postConfirmAccount', request()->route('token') ], 'method' => 'POST']) !!}
            @csrf

            <div>
                <label>Password</label>
                <input type="password" name="password" required />
            </div>
            <div>
                <label>Confirm password</label>
                <input type="password" name="password_confirmation" required /> 
            </div>

            <input type="submit" value="Submit">
        {!! Form::close() !!}
    </div>
@endsection
