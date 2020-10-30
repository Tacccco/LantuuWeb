@extends('layouts.app')

@section('content')
    <div>
        <label>Овог нэр</label>
        <input type="text" value="{{ $data->lastName . ' ' . $data->firstName }}" disabled/>
    </div>
    <div>
        <label>Нас</label>
        <input type="number" value="{{ $data->age }}" disabled/>
    </div>
    <div>
        <label>Хүйс</label>
        <input type="text" value="{{ $data->sex }}" disabled/>
    </div>
    <div>
        <label>Ажил</label>
        <input type="text" value="{{ $data->occupation }}" disabled/>
    </div>
    <div>
        <label>Харъяалал</label>
        <input type="text" value="{{ $data->citizenship }}" disabled/>
    </div>
    <div>
        <label>Утасны дугаар</label>
        <input type="number" value="{{ $data->phoneNumber }}" disabled/>
    </div>
    <div>
        <label>Нөөц дугаар</label>
        <input type="text" value="{{ $data->reserveNumber }}" disabled/>
    </div>
    <div>
        <label>Facebook хаяг</label>
        <input type="text" value="{{ $data->facebookAddress }}" disabled/>
    </div>
    <div>
        <label>Сонирхол</label>
        <textarea disabled>{{ $data->interest }}</textarea>
    </div>
    <div>
        <label>Чөлөөт цагаа хэрхэн өнгөрүүлдэг эсэх</label>
        <textarea disabled>{{ $data->activity }}</textarea>
    </div>
    <div>
        <label>2 жилийн дараах би</label>
        <textarea disabled>{{ $data->selfExpectation }}</textarea>
    </div>
    <div>
        <label>Сайн дурын ажил</label>
        <textarea disabled>{{ $data->volunteering }}</textarea>
    </div>
    <div>
        <label>Давуу тал</label>
        <textarea disabled>{{ $data->advantage }}</textarea>
    </div>
    <div>
        <label>Сул тал</label>
        <textarea disabled>{{ $data->disadvantage }}</textarea>
    </div>
    <div>
        <label>Зорилго</label>
        <textarea disabled>{{ $data->purpose }}</textarea>
    </div>
    <a href="/survey/{{$data->address}}/edit">Edit</a>
    <a href=""">Delete</a>
@endsection