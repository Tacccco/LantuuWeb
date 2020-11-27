@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Messages</h2>

                <div class="clearfix" v-for="message in messages">
                    
                </div>

                @if (Auth::check())
                    {!! Form::open(['action' => ['\App\Http\Controllers\ChatController@store'], 'method' => 'POST']) !!}
                        <div class="input-group">
                            <input type="text" name="message" class="form-control" placeholder="Type your message here...">
                            <input class="btn btn-primary" id="send" type="submit" value="Send">
                        </div>
                    {!! Form::close() !!}
                @endif

            </div>
        </div>
    </div>
    <script>

        $("form").on("submit", function (event) {
            event.preventDefault();
            window.Echo.private('chat').listen('SendMessage', function (e) {
                console.log(e.data.msg);
            });
        }); 
        
        //function click() {
          //  ev.preventDefault()
            //window.Echo.private('chat').listen('SendMessage', function (e) {
              //  console.log(e.data.msg);
            //});
        //}

    </script>
@endsection