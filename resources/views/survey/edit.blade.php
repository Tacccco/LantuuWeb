@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => ['\App\Http\Controllers\SurveyController@update', $data->address], 'method' => 'POST']) !!}
        @csrf
        <div class="container">
            <div class="">
                <label for="lastName">Овог</label>
                <input type="text" name="lastName" value="{{ $data->lastName }}"/>
            </div>   
            <div class="">
                <label for="firstName">Нэр</label>
                <input type="text" name="firstName" value="{{ $data->firstName }}"/>
            </div> 
            <div class="">
                <label for="age">Нас</label>
                <input type="number" name="age" value="{{ $data->age }}"/>
            </div>
                <div class="">
                <label for="Sex">Хүйс</label>    
                <div class="">
                    <label for="Age">Эрэгтэй</label>
                    <input type="radio" value="male" name="sex" <?php if($data->sex == 'male') { echo 'checked'; }  ?> >
                    <label for="Age">Эмэгтэй</label>    
                    <input type="radio" value="female" name="sex" <?php if($data->sex == 'female') { echo 'checked'; }  ?> >
                </div>
            </div>
            <div class="">
                <label for="occupation">Мэргэжил \эрхэлсэн ажил, суралцаж буй сургууль\</label>
                <input type="text" name="occupation" value="{{ $data->occupation }}">
            </div>        
            <div class="">
                <label for="citizenship">Харьяалал \оршин суугаа хаяг\</label>
                <input type="text" name="citizenship" value="{{ $data->citizenship }}">
            </div>
            <div class="">
                <label for="phoneNumber">Утасны дугаар</label>
                <input type="number" name="phoneNumber" value="{{ $data->phoneNumber }}">
            </div>    
            <div class="">
                <label for="reserveNumber">Нөөц дугаар</label>
                <input type="number" name="reserveNumber" value="{{ $data->reserveNumber }}">
            </div>
            <div class="">
                <label for="email">Цахим шуудангийн хаяг</label>
                <input type="text" name="email" value="{{ $data->email }}" disabled />
            </div>
            <div class="">
                <label for="facebookAddress">Фейсбүүк хаяг \холбоосыг оруулна уу!\</label>
                <input type="text" name="facebookAddress" value="{{ $data->facebookAddress }}">
            </div>   
            <div class="">
                <label for="interest">Сонирхол</label>
                <textarea name="interest" name="interest">{{ $data->interest }}</textarea>
            </div>     
            <div class="">
                <label for="activity">Чөлөөт цагаа хэрхэн өнгөрүүлдэг эсэх</label>
                <textarea name="activity" name="activity">{{ $data->activity }}</textarea>
            </div>  
            <div class="">
                <label for="expectation">Ойрын хоёр жилийн зорилго, төлөвлөгөө</label>
                <textarea name="selfExpectation">{{ $data->selfExpectation }}</textarea>
            </div> 
            <div class="">
                <label for="volunteering">Өөрийн нийгмийн идэвхи, карьерийн тухай бичнэ үү</label>
                <textarea name="volunteering" name="volunteering">{{ $data->volunteering }}</textarea>
            </div>  
            <div>
                <div class="">
                    <label for="advantage">Давуу тал</label>
                    <textarea name="advantage">{{ $data->advantage }}</textarea>
                </div> 
                <div class="">
                    <label for="disadvantage">Сул тал</label>
                    <textarea name="disadvantage">{{ $data->disadvantage }}</textarea>
                </div>
            </div>      
            <div class="">
                <label for="purpose">Яагаад элсэх гээд байгаан</label>
                <textarea name="purpose" name="purpose">{{ $data->purpose }}</textarea>
            </div> 
            {{ Form::hidden('_method', 'PUT') }}    
            <input type="submit" id="submit" value="Бүртгүүлэх">           
        </div>    
    {!! Form::close() !!}
@endsection