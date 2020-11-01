@extends('layouts.app')

@section('content')
    <div>
        <label>Овог нэр</label>
        <input type="text" value="{{ $data->lastName . ' ' . $data->firstName }}" readonly/>
    </div>
    <div>
        <label>Нас</label>
        <input type="number" value="{{ $data->age }}" readonly/>
    </div>
    <div>
        <label>Хүйс</label>
        <input type="text" value="{{ $data->sex }}" readonly/>
    </div>
    <div>
        <label>Ажил</label>
        <input type="text" value="{{ $data->occupation }}" readonly/>
    </div>
    <div>
        <label>Харъяалал</label>
        <input type="text" value="{{ $data->citizenship }}" readonly/>
    </div>
    <div>
        <label>Утасны дугаар</label>
        <input type="number" value="{{ $data->phoneNumber }}" readonly/>
    </div>
    <div>
        <label>Нөөц дугаар</label>
        <input type="text" value="{{ $data->reserveNumber }}" readonly/>
    </div>
    <div>
        <label>Facebook хаяг</label>
        <input type="text" value="{{ $data->facebookAddress }}" readonly/>
    </div>
    <div>
        <label>Сонирхол</label>
        <textarea readonly>{{ $data->interest }}</textarea>
    </div>
    <div>
        <label>Чөлөөт цагаа хэрхэн өнгөрүүлдэг эсэх</label>
        <textarea readonly>{{ $data->activity }}</textarea>
    </div>
    <div>
        <label>2 жилийн дараах би</label>
        <textarea readonly>{{ $data->selfExpectation }}</textarea>
    </div>
    <div>
        <label>Сайн дурын ажил</label>
        <textarea readonly>{{ $data->volunteering }}</textarea>
    </div>
    <div>
        <label>Давуу тал</label>
        <textarea readonly>{{ $data->advantage }}</textarea>
    </div>
    <div>
        <label>Сул тал</label>
        <textarea readonly>{{ $data->disadvantage }}</textarea>
    </div>
    <div>
        <label>Зорилго</label>
        <textarea readonly>{{ $data->purpose }}</textarea>
    </div>
    <a href="/survey/{{$data->address}}/edit">Edit</a>
    
    {!! Form::open(['action' => ['\App\Http\Controllers\SurveyController@destroy', $data->address], 'method' => 'POST']) !!}
        @csrf
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
@endsection