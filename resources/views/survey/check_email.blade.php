@extends('layouts.app')

@section('content')
    @if ($arrayData['lever'] == 1)
        @if ($arrayData['trigger'] == 1)
            <h1>Өөрийн анкетийн мэдээллийг шалгах хаягийг {{ $arrayData['data'] }} таны цахим шуудангаар илгээв. Шуудангаа шалга :)))</h1>
        @else
            <h1>Анкет дахь элсэгч {{ $arrayData['data'] }} мэдээлэл амжилттай шинэчлэгдлээ :))))</h1>
        @endif
    @elseif ($arrayData['lever'] == 0) 
        <h1>{{ $arrayData['data'] }} хаягийг бүртгүүлчихсэн байна. Өөр хаягаар дахин анкет бөглөнө үү?!</h1>
    @endif
@endsection