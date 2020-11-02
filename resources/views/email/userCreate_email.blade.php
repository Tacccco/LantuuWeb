@extends('email.template')

@section('emailHead')

    <?php
        $list = explode('+', $data);
    ?>

    <h1>Greetings from lantuu team</h1>
    <p>Hi {{ $list[0] }} :))). Hippity Hoppoty you are now one of us</p>
    <a href="http://lantuundohio.test/newuserwelcomingpage/{{ $list[1] }}">Good good come to the dark side my child, enter your password and your dark side account will be created </a>
@endsection
