@extends('email.template')

@section('emailHead')

    <?php
        $list = explode('+', $data);
    ?>

    <h1>Greetings from lantuu team</h1>
    <p>Hi {{ $list[0] }} :)))</p>
    <a href="http://localhost:8000/survey/{{ $list[1] }}">Бүртгүүлсэн мэдээллийг засах эсвэл устгах холбоос</a>
@endsection
